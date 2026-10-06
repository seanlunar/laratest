<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Getting Started - {{ config('app.name', 'Laravel') }}</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .container {
                text-align: center;
                background: white;
                padding: 60px 40px;
                border-radius: 10px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                max-width: 500px;
            }
            h1 {
                color: #333;
                font-size: 3em;
                margin-bottom: 20px;
            }
            p {
                color: #666;
                font-size: 1.2em;
                margin-bottom: 30px;
            }
            .links {
                display: flex;
                gap: 20px;
                justify-content: center;
                flex-wrap: wrap;
            }
            a {
                display: inline-block;
                padding: 12px 24px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s ease;
            }
            .btn-primary {
                background: #667eea;
                color: white;
            }
            .btn-primary:hover {
                background: #5568d3;
                transform: translateY(-2px);
            }
            .btn-secondary {
                background: #f0f0f0;
                color: #333;
                border: 1px solid #ddd;
            }
            .btn-secondary:hover {
                background: #e0e0e0;
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Getting Started</h1>
            <p>Welcome to your Laravel application!</p>
            <div class="links">
                <a href="{{ route('login') }}" class="btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn-secondary">Register</a>
            </div>
        </div>
    </body>
</html>
