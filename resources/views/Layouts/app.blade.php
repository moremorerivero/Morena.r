<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas Inteligentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(-45deg, #531212ff, #772424ff, #c75e5eff, #e03333ff, #4db8a8);
            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
        }
        
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        
        .scroll-container {
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .scroll-container::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/10 backdrop-blur-md border-b border-white/20 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('home') }}" class="text-white flex items-center">
                    <i class="fas fa-graduation-cap text-2xl mr-3"></i>
                    <h1 class="text-2xl font-bold">Aulas Inteligentes</h1>
                </a>
                <div class="flex space-x-4 items-center">
                    <a href="{{ route('home') }}" class="text-white/80 hover:text-white px-3 py-2 rounded-lg transition flex items-center">
                        <i class="fas fa-home mr-2"></i>Inicio
                    </a>
                    <a href="{{ route('aulas.index') }}" class="text-white/80 hover:text-white px-3 py-2 rounded-lg transition flex items-center">
                        <i class="fas fa-chalkboard-teacher mr-2"></i>Aulas
                    </a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-white/80 hover:text-white px-3 py-2 rounded-lg transition flex items-center">
                            <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="text-white/80 hover:text-white px-3 py-2 rounded-lg transition flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-white/20 text-white px-4 py-2 rounded-lg hover:bg-white/30 transition flex items-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>Ingresar
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

    <script>
        function scrollHorizontal(containerId, direction) {
            const container = document.getElementById(containerId);
            const scrollAmount = 300;
            container.scrollLeft += direction * scrollAmount;
        }
    </script>
</body>
</html>