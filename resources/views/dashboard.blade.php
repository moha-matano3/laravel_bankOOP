<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    
        .container {
            display: flex;
            height: 100vh;
        }
    
        .sidebar {
            background-color: #7c6e7f;
            width: 200px;
        }
    
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
    
        nav ul li {
            margin-bottom: 10px;
        }
    
        nav ul li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            color: #ffffff;
        }
    
        nav ul li a:hover {
            background-color: #000000;
        }
    
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
    
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        h1 a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1><a href="{{route('dashboard.homedash')}}">Dashboard</a></h1>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="{{route('dashboard.profile')}}">Profile</a></li>
                    <li><a href="">Apply Loan</a></li>
                    <li><a href="">Reports</a></li>
                    <li><a href="">Statements</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            @yield('messages')
            @yield('dashboard_Content')
        </div>
    </div>
</body>
</html>