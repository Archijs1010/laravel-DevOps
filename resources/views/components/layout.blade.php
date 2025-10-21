<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Manager</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            margin-bottom: 10px;
            font-size: 2em;
            color: #222;
        }

        hr {
            border: none;
            border-top: 2px solid #ccc;
            margin-bottom: 20px;
        }

        .notification {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .notification-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .notification-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .notification-error ul {
            list-style: disc;
            padding-left: 20px;
        }

        x-navigation {
            display: block;
            margin-bottom: 20px;
        }

        main {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <x-navigation></x-navigation>

    <main>
        <h1>Products</h1>
        <hr>

        @if (session('success'))
            <div class="notification notification-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="notification notification-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}
    </main>
</body>
</html>
