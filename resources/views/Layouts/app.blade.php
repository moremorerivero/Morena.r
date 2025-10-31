<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aulas Inteligentes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(-45deg, #745174ff, #e73c7e, #a1056dff, #2f1d31ff, #9d4edd);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            min-height: 100vh;
            overflow-x: hidden;
            color: white;
            padding: 20px;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        
        .welcome-banner {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            margin: 30px 0;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.18);
            animation: fadeIn 1s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        h1 {
            font-size: 3.2rem;
            margin-bottom: 15px;
            font-weight: 800;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            font-weight: 300;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        
        .welcome-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-top: 20px;
            opacity: 0.9;
        }
        
        .modules-section {
            width: 100%;
            margin: 30px 0;
        }
        
        h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
            position: relative;
            padding-bottom: 15px;
        }
        
        h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 2px;
        }
        
        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .module-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px 25px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.18);
            text-align: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            animation: slideIn 0.8s ease forwards;
            opacity: 0;
            transform: translateX(100px);
        }
        
        .module-card:nth-child(1) { animation-delay: 0.2s; }
        .module-card:nth-child(2) { animation-delay: 0.4s; }
        .module-card:nth-child(3) { animation-delay: 0.6s; }
        .module-card:nth-child(4) { animation-delay: 0.8s; }
        
        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .module-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.25);
        }
        
        .module-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        .module-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .module-card p {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.5), transparent);
            margin: 50px 0;
            width: 100%;
        }
        
        .devices-section {
            width: 100%;
            margin: 30px 0;
        }
        
        .devices-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .device-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.18);
            text-align: center;
            animation: slideIn 1s ease forwards;
            opacity: 0;
            transform: translateX(100px);
        }
        
        .device-card:nth-child(1) { animation-delay: 1s; }
        .device-card:nth-child(2) { animation-delay: 1.2s; }
        .device-card:nth-child(3) { animation-delay: 1.4s; }
        .device-card:nth-child(4) { animation-delay: 1.6s; }
        
        .device-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.25);
        }
        
        .device-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        .device-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .device-card p {
            font-size: 0.95rem;
            opacity: 0.9;
        }
        
        footer {
            text-align: center;
            margin-top: 60px;
            padding: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
            width: 100%;
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transform: translateX(150%);
            transition: transform 0.4s ease;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .welcome-banner {
                padding: 25px;
            }
            
            .modules-grid, .devices-grid {
                grid-template-columns: 1fr;
            }
            
            .module-card, .device-card {
                animation: slideInMobile 0.8s ease forwards;
                transform: translateY(50px);
            }
            
            @keyframes slideInMobile {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-banner">
            <h1>Sistema de Aulas Inteligentes</h1>
            <p class="subtitle">Gestión moderna de espacios educativos</p>
            <div class="welcome-text">
                Bienvenido al sistema integral de gestión de aulas inteligentes. 
                Desde aquí podrás administrar todos los aspectos de tu institución educativa 
                de manera eficiente y moderna.
            </div>
        </div>
        
        <section class="modules-section">
            <h2>Módulos Principales</h2>
            <div class="modules-grid">
                <div class="module-card" onclick="openModule('aulas')">
                    <div class="module-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3>Aulas</h3>
                    <p>Gestión de espacios educativos</p>
                </div>
                <div class="module-card" onclick="openModule('docentes')">
                    <div class="module-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Docentes</h3>
                    <p>Administración del personal</p>
                </div>
                <div class="module-card" onclick="openModule('estudiantes')">
                    <div class="module-icon"><i class="fas fa-user-graduate"></i></div>
                    <h3>Estudiantes</h3>
                    <p>Gestión estudiantil</p>
                </div>
                <div class="module-card" onclick="openModule('materias')">
                    <div class="module-icon"><i class="fas fa-book-open"></i></div>
                    <h3>Materias</h3>
                    <p>Planificación académica</p>
                </div>
            </div>
        </section>
        
        <div class="divider"></div>
        
        <section class="devices-section">
            <h2>Dispositivos Inteligentes</h2>
            <div class="devices-grid">
                <div class="device-card">
                    <div class="device-icon"><i class="fas fa-satellite-dish"></i></div>
                    <h3>Sensores de Ocupación</h3>
                    <p>Monitorean el uso de espacios en tiempo real</p>
                </div>
                <div class="device-card">
                    <div class="device-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Control de Energía</h3>
                    <p>Optimizan el consumo eléctrico en las aulas</p>
                </div>
                <div class="device-card">
                    <div class="device-icon"><i class="fas fa-video"></i></div>
                    <h3>Sistemas de Seguridad</h3>
                    <p>Vigilancia y control de acceso automatizado</p>
                </div>
                <div class="device-card">
                    <div class="device-icon"><i class="fas fa-microphone-alt"></i></div>
                    <h3>Equipos Audiovisuales</h3>
                    <p>Tecnología para experiencias educativas inmersivas</p>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Sistema de Aulas Inteligentes &copy; 2023 - Todos los derechos reservados</p>
        </footer>
    </div>

    <div class="notification" id="notification">
        Módulo abierto correctamente
    </div>

    <script>
        // Función para abrir módulos
        function openModule(moduleName) {
            // Mostrar notificación
            const notification = document.getElementById('notification');
            notification.textContent = `Abriendo módulo: ${moduleName.charAt(0).toUpperCase() + moduleName.slice(1)}`;
            notification.classList.add('show');
            
            // Aquí puedes agregar la lógica para cada módulo específico
            switch(moduleName) {
                case 'aulas':
                    // Lógica para el módulo de Aulas
                    console.log("Abriendo módulo de Aulas");
                    // window.location.href = 'aulas.html'; // Redirigir a página específica
                    break;
                case 'docentes':
                    // Lógica para el módulo de Docentes
                    console.log("Abriendo módulo de Docentes");
                    break;
                case 'estudiantes':
                    // Lógica para el módulo de Estudiantes
                    console.log("Abriendo módulo de Estudiantes");
                    break;
                case 'materias':
                    // Lógica para el módulo de Materias
                    console.log("Abriendo módulo de Materias");
                    break;
            }
            
            // Ocultar notificación después de 3 segundos
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Efecto de escritura para el título de bienvenida
        document.addEventListener('DOMContentLoaded', function() {
            const welcomeText = document.querySelector('.welcome-text');
            const originalText = welcomeText.textContent;
            welcomeText.textContent = '';
            
            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    welcomeText.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 30);
                }
            };
            
            setTimeout(typeWriter, 1000);
        });
    </script>
</body>
</html>