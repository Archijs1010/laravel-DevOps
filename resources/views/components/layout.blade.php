<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Manager</title>
    <style>
        /* Tava iepriekšējā CSS */
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
        nav ol {
            list-style: none;
            display: flex;
            gap: 15px;
            padding-left: 0;
            margin-bottom: 20px;
        }
        nav a {
            text-decoration: none;
            color: #007bff;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        main {
            background-color: #ffffffef;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        header {
            grid-area: header;
        }
        main {
            grid-area: main;
        }
        aside {
            grid-area: sidebar;
        }
        footer {
            grid-area: footer;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas: 
                "header header header header"
                "main main main sidebar"
                "footer footer footer footer";
        }
    </style>
</head>
<body>
    <x-navigation />
    <x-aside style="grid-area: sidebar;"></x-aside>
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
    
    <x-footer />
</body>
</html>
