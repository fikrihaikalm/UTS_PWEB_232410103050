<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIMANKITA - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #6C4AB6;
            --secondary-color: #8D72E1;
            --accent-color: #B9E0FF;
            --light-color: #F8F6F4;
            --dark-color: #2D2727;
        }
        
        body {
            background-color: var(--light-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .art-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background: white;
        }
        
        .art-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .art-img {
            height: 220px;
            object-fit: cover;
            width: 100%;
        }
        
        .art-price {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.1rem;
        }
        
        .art-category {
            display: inline-block;
            padding: 3px 10px;
            background-color: var(--accent-color);
            border-radius: 20px;
            font-size: 0.8rem;
            color: var(--dark-color);
        }
        
        .navbar-brand {
            font-weight: 800;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }
        
        .btn-seniman {
            background-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            border: none;
        }
        
        .btn-seniman:hover {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 80px 0;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            margin-bottom: 50px;
        }
        
        .stat-card {
            border-radius: 15px;
            padding: 20px;
            color: white;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .stat-card h3 {
            font-weight: 800;
            font-size: 2rem;
            margin: 10px 0;
        }
        
        .status-badge {
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .available {
            background-color: #C1E5C0;
            color: #2F5B2C;
        }
        
        .sold {
            background-color: #FFC7C7;
            color: #A10035;
        }
        
        .processing {
            background-color: #FFF5BA;
            color: #8D6600;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>