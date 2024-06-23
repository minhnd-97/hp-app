<?php

// app/Console/Commands/GenerateSitemap.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create(route('home'))->setPriority(1.0))
            ->add(Url::create(url('/san-pham'))->setPriority(0.8));

        // Add dynamic URLs if needed
        // $products = Product::all();
        // foreach ($products as $product) {
        //     $sitemap->add(Url::create(route('product.show', $product->slug))->setPriority(0.7));
        // }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
