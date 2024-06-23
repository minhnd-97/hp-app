<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        h1 {
            font-size: 48px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="300px">
        </a>
    </h1>
    <p>Xin lỗi chức năng này hiện tại đang được phát triển.</p>
    <p><a href="{{ url('/') }}">Vui lòng trở lại trang chủ.</a></p>
</div>
</body>
</html>
