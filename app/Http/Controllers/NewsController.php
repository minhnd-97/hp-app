<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    //Method to load, decode, and process JSON data
    public static function loadAndProcessData()
    {
        $filePath = public_path('storage/data/news-company.json');

        // Check if the file exists
        if (!File::exists($filePath)) {
            return ['error' => 'File not found', 'data' => null];
        }

        // Get the contents of the file
        $jsonData = File::get($filePath);

        // Decode JSON data
        $data = json_decode($jsonData, true); // true to get an associative array

        // Check if decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ['error' => 'Invalid JSON', 'data' => null];
        }

        // Sort the data array based on 'date' field (assuming 'date' is in Y-m-d format)
        usort($data, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return ['error' => null, 'data' => $data];
    }

    // Public method to get the latest news for the index view
    public function index(Request $request)
    {
        $result = $this->loadAndProcessData();

        if ($result['error']) {
            return response()->json(['error' => $result['error']], 404);
        }

        // Get the first 5 items (newest items based on 'date')
        $newData = array_slice($result['data'], 0, 5);

        if ($request->get('is_mobile')) {
            return view('mobile.news.index', ['news' => $newData]); // Return mobile view
        } else {
            return view('pc.news.index', ['news' => $newData]); // Return PC view
        }
    }

    // Public method to get the detail of specific news item
    public function detail($id, Request $request)
    {
        $result = $this->loadAndProcessData();

        if ($result['error']) {
            return response()->json(['error' => $result['error']], 404);
        }

        // Find object with the given id
        $newsItem = null;
        foreach ($result['data'] as $item) {
            if ($item['id'] == $id) {
                $newsItem = $item;
                break;
            }
        }

        if (!$newsItem) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        // Get the first 5 items (newest items based on 'date')
        $newData = array_slice($result['data'], 0, 5);

        if ($request->get('is_mobile')) {
            return view('mobile.news.detail', ['new' => $newsItem, 'newData' => $newData]); // Return mobile view
        } else {
            return view('pc.news.detail', ['new' => $newsItem, 'newData' => $newData]); // Return PC view
        }
    }

    public function indexCompany(Request $request) {
        $result = $this->loadAndProcessData();
        $news = $result['data'];
        $perPage = 5; // Number of items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a paginated data array
        $currentItems = array_slice($news, ($currentPage - 1) * $perPage, $perPage);
        $paginatedNews = new LengthAwarePaginator($currentItems, count($news), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        // Get the first 5 items (newest items based on 'date')
        $newData = array_slice($result['data'], 0, 5);

        if ($result['error']) {
            return response()->json(['error' => $result['error']], 404);
        }

        if ($request->get('is_mobile')) {
            return view('mobile.news.index-company', ['news' => $paginatedNews, 'newData' => $newData]); // Return mobile view
        } else {
            return view('pc.news.index-company', ['news' => $paginatedNews, 'newData' => $newData]); // Return PC view
        }
    }
}
