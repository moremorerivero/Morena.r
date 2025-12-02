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
            background: linear-gradient(-45deg, #1b2555ff, rgba(247, 202, 244, 1), #581466ff, #2f1d31ff, #9d4edd);
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
            max-width: 1400px;
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
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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
        .module-card:nth-child(5) { animation-delay: 1.0s; }
        .module-card:nth-child(6) { animation-delay: 1.2s; }
        
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

        /* ESTILOS PARA LA GESTIÓN DE AULAS */
        .classrooms-section, .schedule-section, .teachers-section, .subjects-section, .ac-section, .lights-section {
            width: 100%;
            margin: 30px 0;
            display: none;
        }

        .back-button {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .classrooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .classroom-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .classroom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .classroom-card.occupied {
            border-left: 5px solid #e74c3c;
        }

        .classroom-card.available {
            border-left: 5px solid #2ecc71;
        }

        .classroom-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .status {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .status.occupied {
            background-color: rgba(231, 76, 60, 0.3);
            color: #ff9e9e;
        }

        .status.available {
            background-color: rgba(46, 204, 113, 0.3);
            color: #a3ffc5;
        }

        .classroom-info {
            margin-bottom: 20px;
        }

        .classroom-info p {
            margin-bottom: 8px;
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 0.85rem;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .modal-wide {
            max-width: 700px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .close-btn {
            font-size: 1.5rem;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.7);
            transition: color 0.3s;
        }

        .close-btn:hover {
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            backdrop-filter: blur(10px);
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .reservation-list, .task-list {
            margin-top: 25px;
        }

        .reservation-item, .task-item, .teacher-item {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .reservation-info h4, .task-info h4, .teacher-info h4 {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .reservation-actions button, .task-actions button, .teacher-actions button {
            background: none;
            border: none;
            color: #e74c3c;
            cursor: pointer;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .reservation-actions button:hover, .task-actions button:hover, .teacher-actions button:hover {
            background: rgba(231, 76, 60, 0.2);
        }

        /* ESTILOS PARA HORARIOS */
        .trimesters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .trimester-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .trimester-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .trimester-card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .trimester-card p {
            opacity: 0.9;
        }

        .schedule-container {
            display: none;
            margin-top: 30px;
        }

        .day-selector {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .day-btn {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .day-btn.active {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .day-btn:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .schedule-table {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .schedule-table th, .schedule-table td {
            padding: 15px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .schedule-table th {
            background: rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }

        .schedule-table tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.05);
        }

        .schedule-table tr:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .class-cell {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            margin: 2px;
        }

        /* ESTILOS PARA DOCENTES Y MATERIAS */
        .teachers-grid, .subjects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .teacher-card, .subject-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .teacher-card:hover, .subject-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .teacher-name, .subject-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .teacher-info, .subject-info {
            margin-bottom: 20px;
        }

        .teacher-info p, .subject-info p {
            margin-bottom: 8px;
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* ESTILOS PARA AIRES ACONDICIONADOS */
        .ac-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .ac-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .ac-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .ac-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .ac-status {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .status-online {
            background-color: #2ecc71;
            box-shadow: 0 0 10px #2ecc71;
        }

        .status-maintenance {
            background-color: #e74c3c;
            box-shadow: 0 0 10px #e74c3c;
        }

        .ac-info {
            margin-bottom: 20px;
        }

        .ac-info p {
            margin-bottom: 8px;
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* ESTILOS PARA LUCES */
        .lights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .light-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .light-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .light-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .light-controls {
            margin: 20px 0;
        }

        .intensity-slider {
            width: 100%;
            margin: 15px 0;
        }

        .intensity-value {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .connection-status {
            display: flex;
            align-items: center;
            margin-top: 15px;
            padding: 10px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
        }

        .connection-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .connected {
            background-color: #2ecc71;
        }

        .disconnected {
            background-color: #e74c3c;
        }

        /* Estilos para el historial */
        .history-section {
            margin-top: 30px;
        }

        .history-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            backdrop-filter: blur(10px);
        }

        .history-item h4 {
            margin-bottom: 5px;
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .welcome-banner {
                padding: 25px;
            }
            
            .modules-grid, .devices-grid, .classrooms-grid, .trimesters-grid, .teachers-grid, .subjects-grid, .ac-grid, .lights-grid {
                grid-template-columns: 1fr;
            }
            
            .module-card, .device-card {
                animation: slideInMobile 0.8s ease forwards;
                transform: translateY(50px);
            }
            
            .schedule-table {
                font-size: 0.8rem;
            }
            
            .schedule-table th, .schedule-table td {
                padding: 8px 5px;
            }
            
            .action-buttons {
                flex-direction: column;
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
        <!-- Sección de Bienvenida (se oculta al abrir módulos) -->
        <div id="welcome-section">
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
                    <div class="module-card" onclick="openModule('horarios')">
                        <div class="module-icon"><i class="fas fa-calendar-alt"></i></div>
                        <h3>Horarios</h3>
                        <p>Organización de tiempos y espacios</p>
                    </div>
                    <div class="module-card" onclick="openModule('docentes')">
                        <div class="module-icon"><i class="fas fa-user-tie"></i></div>
                        <h3>Docentes</h3>
                        <p>Administración del personal</p>
                    </div>
                    <!-- Cambiamos Estudiantes por Aires Acondicionados -->
                    <div class="module-card" onclick="openModule('aires')">
                        <div class="module-icon"><i class="fas fa-wind"></i></div>
                        <h3>Aires Acondicionados</h3>
                        <p>Control y monitoreo climático</p>
                    </div>
                    <!-- Agregamos el nuevo módulo de Luces -->
                    <div class="module-card" onclick="openModule('luces')">
                        <div class="module-icon"><i class="fas fa-lightbulb"></i></div>
                        <h3>Luces</h3>
                        <p>Control de iluminación inteligente</p>
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
                        <div class="device-icon"><i class="fas fa-wind"></i></div>
                        <h3>Sistemas Climáticos</h3>
                        <p>Control automático de temperatura y humedad</p>
                    </div>
                    <div class="device-card">
                        <div class="device-icon"><i class="fas fa-lightbulb"></i></div>
                        <h3>Iluminación Inteligente</h3>
                        <p>Ajuste automático de intensidad lumínica</p>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Sección de Aulas (se muestra al hacer clic en Aulas) -->
        <section class="classrooms-section" id="classrooms-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Gestión de Aulas</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Administra los espacios educativos de tu institución
            </p>
            
            <div class="classrooms-grid" id="classrooms-container">
                <!-- Las aulas se cargarán aquí dinámicamente -->
            </div>
        </section>

        <!-- Sección de Horarios (se muestra al hacer clic en Horarios) -->
        <section class="schedule-section" id="schedule-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Gestión de Horarios</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Organiza los horarios escolares por trimestre
            </p>

            <!-- Selección de Trimestre -->
            <div class="trimesters-grid" id="trimesters-container">
                <div class="trimester-card" onclick="selectTrimester(1)">
                    <h3>Primer Trimestre</h3>
                    <p>Marzo - Mayo</p>
                </div>
                <div class="trimester-card" onclick="selectTrimester(2)">
                    <h3>Segundo Trimestre</h3>
                    <p>Junio - Agosto</p>
                </div>
                <div class="trimester-card" onclick="selectTrimester(3)">
                    <h3>Tercer Trimestre</h3>
                    <p>Septiembre - Noviembre</p>
                </div>
            </div>

            <!-- Horario del Trimestre Seleccionado -->
            <div class="schedule-container" id="schedule-container">
                <div class="day-selector" id="day-selector">
                    <!-- Los días se cargarán dinámicamente -->
                </div>
                
                <div class="schedule-table-container" id="schedule-table-container">
                    <!-- La tabla de horarios se cargará dinámicamente -->
                </div>
            </div>
        </section>

        <!-- Sección de Docentes (se muestra al hacer clic en Docentes) -->
        <section class="teachers-section" id="teachers-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Gestión de Docentes</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Administra el personal docente de la institución
            </p>

            <div style="text-align: center; margin-bottom: 30px;">
                <button class="btn" onclick="openTeacherModal()">
                    <i class="fas fa-plus"></i> Agregar Nuevo Docente
                </button>
            </div>
            
            <div class="teachers-grid" id="teachers-container">
                <!-- Los docentes se cargarán aquí dinámicamente -->
            </div>
        </section>

        <!-- Sección de Aires Acondicionados (nueva) -->
        <section class="ac-section" id="ac-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Gestión de Aires Acondicionados</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Monitoreo y control de sistemas de climatización
            </p>

            <div class="ac-grid" id="ac-container">
                <!-- Los aires acondicionados se cargarán aquí dinámicamente -->
            </div>

            <div class="history-section">
                <h3>Historial de Uso</h3>
                <div id="ac-history-container">
                    <!-- El historial se cargará aquí dinámicamente -->
                </div>
            </div>
        </section>

        <!-- Sección de Luces (nueva) -->
        <section class="lights-section" id="lights-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Control de Iluminación</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Regulación de intensidad lumínica por aula
            </p>

            <div class="lights-grid" id="lights-container">
                <!-- Los controles de luces se cargarán aquí dinámicamente -->
            </div>

            <div class="history-section">
                <h3>Configuración ESP32</h3>
                <div class="light-card">
                    <h4>Instrucciones de Conexión</h4>
                    <div class="ac-info">
                        <p><strong>Pinout ESP32 para control de luces:</strong></p>
                        <p>• GPIO 2: Salida PWM para control de intensidad</p>
                        <p>• GPIO 4: Sensor de luminosidad (opcional)</p>
                        <p>• 3.3V: Alimentación para módulo de luces</p>
                        <p>• GND: Tierra común</p>
                    </div>
                    <div class="connection-status">
                        <div class="connection-dot connected"></div>
                        <span>Sistema de control listo</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Materias (se muestra al hacer clic en Materias) -->
        <section class="subjects-section" id="subjects-section">
            <button class="back-button" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </button>
            
            <h2>Gestión de Materias</h2>
            <p style="text-align: center; margin-bottom: 30px; opacity: 0.9;">
                Planificación académica y asignación de tareas
            </p>
            
            <div class="subjects-grid" id="subjects-container">
                <!-- Las materias se cargarán aquí dinámicamente -->
            </div>
        </section>
        
        <footer>
            <p>Sistema de Aulas Inteligentes &copy; 2023 - Todos los derechos reservados</p>
        </footer>
    </div>

    <!-- Modal para reservar aula -->
    <div class="modal" id="reservation-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Reservar Aula</h3>
                <span class="close-btn">&times;</span>
            </div>
            <form id="reservation-form">
                <input type="hidden" id="classroom-id">
                <div class="form-group">
                    <label for="reservation-date">Fecha:</label>
                    <input type="date" id="reservation-date" required>
                </div>
                <div class="form-group">
                    <label for="reservation-time">Hora:</label>
                    <input type="time" id="reservation-time" required>
                </div>
                <div class="form-group">
                    <label for="reservation-duration">Duración (horas):</label>
                    <select id="reservation-duration" required>
                        <option value="1">1 hora</option>
                        <option value="2">2 horas</option>
                        <option value="3">3 horas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reservation-course">Curso:</label>
                    <input type="text" id="reservation-course" placeholder="Ej: 4to A" required>
                </div>
                <div class="form-group">
                    <label for="reservation-teacher">Docente:</label>
                    <input type="text" id="reservation-teacher" placeholder="Nombre del docente" required>
                </div>
                <button type="submit" class="btn">Confirmar Reserva</button>
            </form>
        </div>
    </div>

    <!-- Modal para agregar docente -->
    <div class="modal" id="teacher-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="teacher-modal-title">Agregar Nuevo Docente</h3>
                <span class="close-btn">&times;</span>
            </div>
            <form id="teacher-form">
                <input type="hidden" id="teacher-id">
                <div class="form-group">
                    <label for="teacher-name">Nombre completo:</label>
                    <input type="text" id="teacher-name" placeholder="Ej: María González" required>
                </div>
                <div class="form-group">
                    <label for="teacher-email">Email:</label>
                    <input type="email" id="teacher-email" placeholder="ejemplo@escuela.edu" required>
                </div>
                <div class="form-group">
                    <label for="teacher-phone">Teléfono:</label>
                    <input type="tel" id="teacher-phone" placeholder="+54 11 1234-5678">
                </div>
                <div class="form-group">
                    <label for="teacher-specialty">Especialidad:</label>
                    <input type="text" id="teacher-specialty" placeholder="Ej: Matemáticas, Ciencias, etc." required>
                </div>
                <div class="form-group">
                    <label for="teacher-courses">Cursos asignados:</label>
                    <input type="text" id="teacher-courses" placeholder="Ej: 4to A, 5to B, etc.">
                </div>
                <button type="submit" class="btn">Guardar Docente</button>
            </form>
        </div>
    </div>

    <!-- Modal para agregar tarea -->
    <div class="modal" id="task-modal">
        <div class="modal-content modal-wide">
            <div class="modal-header">
                <h3 id="task-modal-title">Agregar Nueva Tarea</h3>
                <span class="close-btn">&times;</span>
            </div>
            <form id="task-form">
                <input type="hidden" id="task-subject-id">
                <div class="form-group">
                    <label for="task-title">Título de la tarea:</label>
                    <input type="text" id="task-title" placeholder="Ej: Trabajo práctico de Historia" required>
                </div>
                <div class="form-group">
                    <label for="task-description">Descripción:</label>
                    <textarea id="task-description" placeholder="Describe los detalles de la tarea..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="task-deadline">Fecha de entrega:</label>
                    <input type="date" id="task-deadline" required>
                </div>
                <div class="form-group">
                    <label for="task-teacher">Docente asignado:</label>
                    <select id="task-teacher" required>
                        <option value="">Seleccionar docente</option>
                        <!-- Los docentes se cargarán dinámicamente -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="task-course">Curso destinado:</label>
                    <input type="text" id="task-course" placeholder="Ej: 4to A, 5to B, etc." required>
                </div>
                <button type="submit" class="btn">Crear Tarea</button>
            </form>
        </div>
    </div>

    <div class="notification" id="notification">
        Módulo abierto correctamente
    </div>

    <script>
        // Datos de ejemplo para las aulas
        const classrooms = [
            {
                id: 1,
                name: "MAKER",
                capacity: 25,
                equipment: "Impresoras 3D, kits de robótica",
                status: "available",
                currentCourse: null,
                reservations: []
            },
            {
                id: 2,
                name: "INFORMATICA",
                capacity: 30,
                equipment: "Computadoras, proyector",
                status: "occupied",
                currentCourse: "5to B - Programación",
                reservations: []
            },
            {
                id: 3,
                name: "ARTISTICA",
                capacity: 20,
                equipment: "Materiales de arte, caballetes",
                status: "available",
                currentCourse: null,
                reservations: []
            },
            {
                id: 4,
                name: "LENGUA EXTRANJERA",
                capacity: 25,
                equipment: "Audio, materiales multimedia",
                status: "occupied",
                currentCourse: "3ro A - Inglés",
                reservations: []
            },
            {
                id: 5,
                name: "EXACTAS",
                capacity: 30,
                equipment: "Pizarras interactivas, calculadoras",
                status: "available",
                currentCourse: null,
                reservations: []
            },
            {
                id: 6,
                name: "LABORATORIO",
                capacity: 20,
                equipment: "Microscopios, reactivos, instrumental",
                status: "occupied",
                currentCourse: "6to A - Química",
                reservations: []
            },
            {
                id: 7,
                name: "INVERNADERO",
                capacity: 15,
                equipment: "Plantas, herramientas de jardinería",
                status: "available",
                currentCourse: null,
                reservations: []
            },
            {
                id: 8,
                name: "SOCIALES",
                capacity: 35,
                equipment: "Mapas, proyector, biblioteca",
                status: "available",
                currentCourse: null,
                reservations: []
            },
            {
                id: 9,
                name: "GYM",
                capacity: 40,
                equipment: "Equipamiento deportivo",
                status: "occupied",
                currentCourse: "2do A - Educación Física",
                reservations: []
            }
        ];

        // Datos de horarios por trimestre
        const schedules = {
            1: { // Primer Trimestre (Marzo - Mayo)
                "Lunes": {
                    "Primer Año A": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Primer Año B": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Segundo Año A": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Segundo Año B": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Tercer Año": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Cuarto Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Quinto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"]
                },
                "Martes": {
                    "Primer Año A": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Primer Año B": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Segundo Año A": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Segundo Año B": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Tercer Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Cuarto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Quinto Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"]
                },
                "Miércoles": {
                    "Primer Año A": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Primer Año B": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Segundo Año A": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Segundo Año B": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Tercer Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Cuarto Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Quinto Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"]
                },
                "Jueves": {
                    "Primer Año A": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Primer Año B": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Segundo Año A": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Segundo Año B": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Tercer Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Cuarto Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Quinto Año": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"]
                },
                "Viernes": {
                    "Primer Año A": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Primer Año B": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Segundo Año A": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Segundo Año B": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Tercer Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Cuarto Año": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Quinto Año": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"]
                }
            },
            2: { // Segundo Trimestre (Junio - Agosto)
                "Lunes": {
                    "Primer Año A": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Primer Año B": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Segundo Año A": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Segundo Año B": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Tercer Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Cuarto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Quinto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"]
                },
                "Martes": {
                    "Primer Año A": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Primer Año B": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Segundo Año A": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Segundo Año B": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Tercer Año": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Cuarto Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Quinto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"]
                },
                "Miércoles": {
                    "Primer Año A": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Primer Año B": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Segundo Año A": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Segundo Año B": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Tercer Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Cuarto Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Quinto Año": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"]
                },
                "Jueves": {
                    "Primer Año A": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Primer Año B": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Segundo Año A": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Segundo Año B": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Tercer Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Cuarto Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Quinto Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"]
                },
                "Viernes": {
                    "Primer Año A": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Primer Año B": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Segundo Año A": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Segundo Año B": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Tercer Año": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Cuarto Año": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Quinto Año": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"]
                }
            },
            3: { // Tercer Trimestre (Septiembre - Noviembre)
                "Lunes": {
                    "Primer Año A": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Primer Año B": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Segundo Año A": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Segundo Año B": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Tercer Año": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Cuarto Año": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Quinto Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"]
                },
                "Martes": {
                    "Primer Año A": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Primer Año B": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Segundo Año A": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Segundo Año B": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Tercer Año": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Cuarto Año": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Quinto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"]
                },
                "Miércoles": {
                    "Primer Año A": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Primer Año B": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Segundo Año A": ["LENGUA EXTRANJERA", "MAKER", "ARTISTICA", "INVERNADERO"],
                    "Segundo Año B": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Tercer Año": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Cuarto Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Quinto Año": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"]
                },
                "Jueves": {
                    "Primer Año A": ["INFORMATICA", "EXACTAS", "SOCIALES", "LABORATORIO"],
                    "Primer Año B": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Segundo Año A": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"],
                    "Segundo Año B": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Tercer Año": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Cuarto Año": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Quinto Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"]
                },
                "Viernes": {
                    "Primer Año A": ["LABORATORIO", "LENGUA EXTRANJERA", "MAKER", "ARTISTICA"],
                    "Primer Año B": ["INVERNADERO", "GYM", "INFORMATICA", "EXACTAS"],
                    "Segundo Año A": ["SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA", "MAKER"],
                    "Segundo Año B": ["ARTISTICA", "INVERNADERO", "GYM", "INFORMATICA"],
                    "Tercer Año": ["EXACTAS", "SOCIALES", "LABORATORIO", "LENGUA EXTRANJERA"],
                    "Cuarto Año": ["MAKER", "ARTISTICA", "INVERNADERO", "GYM"],
                    "Quinto Año": ["GYM", "INFORMATICA", "EXACTAS", "SOCIALES"]
                }
            }
        };

        // Datos de docentes y materias
        let teachers = [
            {
                id: 1,
                name: "María González",
                email: "maria.gonzalez@escuela.edu",
                phone: "+54 11 1234-5678",
                specialty: "Matemáticas",
                courses: "4to A, 5to B"
            },
            {
                id: 2,
                name: "Carlos Rodríguez",
                email: "carlos.rodriguez@escuela.edu",
                phone: "+54 11 2345-6789",
                specialty: "Ciencias Naturales",
                courses: "3ro A, 4to B"
            },
            {
                id: 3,
                name: "Ana Martínez",
                email: "ana.martinez@escuela.edu",
                phone: "+54 11 3456-7890",
                specialty: "Lengua y Literatura",
                courses: "5to A, 6to B"
            }
        ];

        let subjects = [
            {
                id: 1,
                name: "Matemáticas",
                description: "Álgebra, geometría y cálculo",
                teacher: "María González",
                tasks: [
                    {
                        id: 1,
                        title: "Trabajo práctico de Álgebra",
                        description: "Resolver los ejercicios de la página 45",
                        deadline: "2023-11-15",
                        teacher: "María González",
                        course: "4to A"
                    }
                ]
            },
            {
                id: 2,
                name: "Ciencias Naturales",
                description: "Biología, física y química",
                teacher: "Carlos Rodríguez",
                tasks: []
            },
            {
                id: 3,
                name: "Lengua y Literatura",
                description: "Gramática, redacción y análisis literario",
                teacher: "Ana Martínez",
                tasks: []
            },
            {
                id: 4,
                name: "Historia",
                description: "Historia argentina y mundial",
                teacher: "Pendiente",
                tasks: []
            },
            {
                id: 5,
                name: "Geografía",
                description: "Geografía física y humana",
                teacher: "Pendiente",
                tasks: []
            },
            {
                id: 6,
                name: "Educación Física",
                description: "Deportes y actividad física",
                teacher: "Pendiente",
                tasks: []
            }
        ];

        // Datos de ejemplo para los aires acondicionados
        const airConditioners = [
            {
                id: 1,
                classroom: "MAKER",
                status: "online",
                hoursUsed: 120,
                maintenance: false,
                history: [
                    { date: "2023-03-15", hours: 4, teacher: "María González", action: "Encendido" },
                    { date: "2023-03-16", hours: 6, teacher: "Carlos Rodríguez", action: "Encendido" },
                    { date: "2023-03-20", hours: 8, teacher: "Ana Martínez", action: "Encendido" }
                ]
            },
            {
                id: 2,
                classroom: "INFORMATICA",
                status: "online",
                hoursUsed: 95,
                maintenance: false,
                history: [
                    { date: "2023-03-15", hours: 5, teacher: "Ana Martínez", action: "Encendido" },
                    { date: "2023-03-18", hours: 7, teacher: "Carlos Rodríguez", action: "Encendido" }
                ]
            },
            {
                id: 3,
                classroom: "ARTISTICA",
                status: "maintenance",
                hoursUsed: 200,
                maintenance: true,
                history: [
                    { date: "2023-03-10", hours: 8, teacher: "María González", action: "Encendido" },
                    { date: "2023-03-11", hours: 7, teacher: "Carlos Rodríguez", action: "Encendido" },
                    { date: "2023-03-12", hours: 6, teacher: "Ana Martínez", action: "Encendido" },
                    { date: "2023-03-25", hours: 0, teacher: "Sistema", action: "Mantenimiento requerido" }
                ]
            },
            {
                id: 4,
                classroom: "LENGUA EXTRANJERA",
                status: "online",
                hoursUsed: 85,
                maintenance: false,
                history: [
                    { date: "2023-03-14", hours: 5, teacher: "Carlos Rodríguez", action: "Encendido" },
                    { date: "2023-03-19", hours: 6, teacher: "Ana Martínez", action: "Encendido" }
                ]
            },
            {
                id: 5,
                classroom: "EXACTAS",
                status: "online",
                hoursUsed: 110,
                maintenance: false,
                history: [
                    { date: "2023-03-13", hours: 7, teacher: "María González", action: "Encendido" },
                    { date: "2023-03-17", hours: 5, teacher: "Ana Martínez", action: "Encendido" }
                ]
            },
            {
                id: 6,
                classroom: "LABORATORIO",
                status: "online",
                hoursUsed: 150,
                maintenance: false,
                history: [
                    { date: "2023-03-12", hours: 8, teacher: "Carlos Rodríguez", action: "Encendido" },
                    { date: "2023-03-16", hours: 6, teacher: "María González", action: "Encendido" }
                ]
            },
            {
                id: 7,
                classroom: "INVERNADERO",
                status: "maintenance",
                hoursUsed: 180,
                maintenance: true,
                history: [
                    { date: "2023-03-11", hours: 7, teacher: "Ana Martínez", action: "Encendido" },
                    { date: "2023-03-24", hours: 0, teacher: "Sistema", action: "Mantenimiento programado" }
                ]
            },
            {
                id: 8,
                classroom: "SOCIALES",
                status: "online",
                hoursUsed: 75,
                maintenance: false,
                history: [
                    { date: "2023-03-15", hours: 4, teacher: "Carlos Rodríguez", action: "Encendido" },
                    { date: "2023-03-21", hours: 5, teacher: "María González", action: "Encendido" }
                ]
            },
            {
                id: 9,
                classroom: "GYM",
                status: "online",
                hoursUsed: 130,
                maintenance: false,
                history: [
                    { date: "2023-03-14", hours: 6, teacher: "Ana Martínez", action: "Encendido" },
                    { date: "2023-03-22", hours: 7, teacher: "Carlos Rodríguez", action: "Encendido" }
                ]
            }
        ];

        // Datos de ejemplo para las luces
        const lights = [
            {
                id: 1,
                classroom: "MAKER",
                intensity: 75,
                connected: true,
                automatic: true
            },
            {
                id: 2,
                classroom: "INFORMATICA",
                intensity: 60,
                connected: true,
                automatic: false
            },
            {
                id: 3,
                classroom: "ARTISTICA",
                intensity: 85,
                connected: true,
                automatic: true
            },
            {
                id: 4,
                classroom: "LENGUA EXTRANJERA",
                intensity: 70,
                connected: true,
                automatic: false
            },
            {
                id: 5,
                classroom: "EXACTAS",
                intensity: 65,
                connected: true,
                automatic: true
            },
            {
                id: 6,
                classroom: "LABORATORIO",
                intensity: 80,
                connected: true,
                automatic: false
            },
            {
                id: 7,
                classroom: "INVERNADERO",
                intensity: 90,
                connected: false,
                automatic: true
            },
            {
                id: 8,
                classroom: "SOCIALES",
                intensity: 55,
                connected: true,
                automatic: true
            },
            {
                id: 9,
                classroom: "GYM",
                intensity: 95,
                connected: true,
                automatic: false
            }
        ];

        // Elementos del DOM
        const welcomeSection = document.getElementById('welcome-section');
        const classroomsSection = document.getElementById('classrooms-section');
        const scheduleSection = document.getElementById('schedule-section');
        const teachersSection = document.getElementById('teachers-section');
        const subjectsSection = document.getElementById('subjects-section');
        const acSection = document.getElementById('ac-section');
        const lightsSection = document.getElementById('lights-section');
        const classroomsContainer = document.getElementById('classrooms-container');
        const teachersContainer = document.getElementById('teachers-container');
        const subjectsContainer = document.getElementById('subjects-container');
        const acContainer = document.getElementById('ac-container');
        const lightsContainer = document.getElementById('lights-container');
        const acHistoryContainer = document.getElementById('ac-history-container');
        const trimestersContainer = document.getElementById('trimesters-container');
        const scheduleContainer = document.getElementById('schedule-container');
        const daySelector = document.getElementById('day-selector');
        const scheduleTableContainer = document.getElementById('schedule-table-container');
        const reservationModal = document.getElementById('reservation-modal');
        const teacherModal = document.getElementById('teacher-modal');
        const taskModal = document.getElementById('task-modal');
        const closeBtns = document.querySelectorAll('.close-btn');
        const reservationForm = document.getElementById('reservation-form');
        const teacherForm = document.getElementById('teacher-form');
        const taskForm = document.getElementById('task-form');
        const classroomIdInput = document.getElementById('classroom-id');
        const teacherIdInput = document.getElementById('teacher-id');
        const taskSubjectIdInput = document.getElementById('task-subject-id');
        const taskTeacherSelect = document.getElementById('task-teacher');
        const notification = document.getElementById('notification');

        let currentTrimester = 1;
        let currentDay = "Lunes";

        // Función para abrir módulos (actualizada)
        function openModule(moduleName) {
            // Mostrar notificación
            notification.textContent = `Abriendo módulo: ${moduleName.charAt(0).toUpperCase() + moduleName.slice(1)}`;
            notification.classList.add('show');
            
            // Lógica para cada módulo específico
            switch(moduleName) {
                case 'aulas':
                    showClassroomsModule();
                    break;
                case 'horarios':
                    showScheduleModule();
                    break;
                case 'docentes':
                    showTeachersModule();
                    break;
                case 'aires':
                    showACModule();
                    break;
                case 'luces':
                    showLightsModule();
                    break;
                case 'materias':
                    showSubjectsModule();
                    break;
            }
            
            // Ocultar notificación después de 3 segundos
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Mostrar módulo de aulas
        function showClassroomsModule() {
            hideAllSections();
            classroomsSection.style.display = 'block';
            loadClassrooms();
        }

        // Mostrar módulo de horarios
        function showScheduleModule() {
            hideAllSections();
            scheduleSection.style.display = 'block';
            loadTrimesters();
        }

        // Mostrar módulo de docentes
        function showTeachersModule() {
            hideAllSections();
            teachersSection.style.display = 'block';
            loadTeachers();
        }

        // Mostrar módulo de materias
        function showSubjectsModule() {
            hideAllSections();
            subjectsSection.style.display = 'block';
            loadSubjects();
        }

        // Mostrar módulo de Aires Acondicionados
        function showACModule() {
            hideAllSections();
            acSection.style.display = 'block';
            loadAirConditioners();
            loadACHistory();
        }

        // Mostrar módulo de Luces
        function showLightsModule() {
            hideAllSections();
            lightsSection.style.display = 'block';
            loadLights();
        }

        // Función para ocultar todas las secciones
        function hideAllSections() {
            const sections = [
                welcomeSection, classroomsSection, scheduleSection, 
                teachersSection, subjectsSection, acSection, lightsSection
            ];
            sections.forEach(section => {
                if (section) section.style.display = 'none';
            });
        }

        // Volver al inicio
        function goBack() {
            hideAllSections();
            welcomeSection.style.display = 'block';
        }

        // Cargar aires acondicionados
        function loadAirConditioners() {
            acContainer.innerHTML = '';
            
            airConditioners.forEach(ac => {
                const acCard = document.createElement('div');
                acCard.className = 'ac-card';
                
                const statusIndicator = ac.status === 'online' ? 
                    '<span class="status-indicator status-online"></span>Operativo' : 
                    '<span class="status-indicator status-maintenance"></span>En Mantenimiento';
                
                acCard.innerHTML = `
                    <div class="ac-name">Aire Acondicionado - ${ac.classroom}</div>
                    <div class="ac-status">
                        ${statusIndicator}
                    </div>
                    <div class="ac-info">
                        <p><strong>Horas de uso total:</strong> ${ac.hoursUsed} horas</p>
                        <p><strong>Estado:</strong> ${ac.maintenance ? 'Requiere mantenimiento' : 'Funcionando correctamente'}</p>
                        <p><strong>Último uso:</strong> ${ac.history[ac.history.length - 1].date} por ${ac.history[ac.history.length - 1].teacher}</p>
                    </div>
                `;
                
                acContainer.appendChild(acCard);
            });
        }

        // Cargar historial de aires acondicionados
        function loadACHistory() {
            acHistoryContainer.innerHTML = '';
            
            // Combinar todos los historiales
            const allHistory = [];
            airConditioners.forEach(ac => {
                ac.history.forEach(record => {
                    allHistory.push({
                        ...record,
                        classroom: ac.classroom
                    });
                });
            });
            
            // Ordenar por fecha (más reciente primero)
            allHistory.sort((a, b) => new Date(b.date) - new Date(a.date));
            
            // Mostrar los 10 registros más recientes
            const recentHistory = allHistory.slice(0, 10);
            
            recentHistory.forEach(record => {
                const historyItem = document.createElement('div');
                historyItem.className = 'history-item';
                
                historyItem.innerHTML = `
                    <h4>Aula ${record.classroom} - ${record.date}</h4>
                    <p><strong>Acción:</strong> ${record.action} | <strong>Profesor:</strong> ${record.teacher}</p>
                    ${record.hours > 0 ? `<p><strong>Duración:</strong> ${record.hours} horas</p>` : ''}
                `;
                
                acHistoryContainer.appendChild(historyItem);
            });
        }

        // Cargar controles de luces
        function loadLights() {
            lightsContainer.innerHTML = '';
            
            lights.forEach(light => {
                const lightCard = document.createElement('div');
                lightCard.className = 'light-card';
                
                lightCard.innerHTML = `
                    <div class="light-name">Control de Luces - ${light.classroom}</div>
                    <div class="light-controls">
                        <label for="intensity-${light.id}">Intensidad: <span id="value-${light.id}">${light.intensity}</span>%</label>
                        <input type="range" min="0" max="100" value="${light.intensity}" 
                               class="intensity-slider" id="intensity-${light.id}"
                               oninput="updateIntensity(${light.id}, this.value)">
                        <div class="intensity-value" id="intensity-value-${light.id}">
                            ${getIntensityLabel(light.intensity)}
                        </div>
                    </div>
                    <div class="connection-status">
                        <div class="connection-dot ${light.connected ? 'connected' : 'disconnected'}"></div>
                        <span>${light.connected ? 'Conectado al ESP32' : 'Desconectado'}</span>
                    </div>
                    <div style="margin-top: 15px;">
                        <button class="btn btn-small" onclick="sendToESP32(${light.id})">
                            <i class="fas fa-paper-plane"></i> Enviar a ESP32
                        </button>
                        <button class="btn btn-small" onclick="toggleAutomatic(${light.id})" 
                                style="margin-left: 10px;">
                            ${light.automatic ? '<i class="fas fa-robot"></i> Automático' : '<i class="fas fa-user"></i> Manual'}
                        </button>
                    </div>
                `;
                
                lightsContainer.appendChild(lightCard);
            });
        }

        // Actualizar intensidad de luz
        function updateIntensity(lightId, value) {
            document.getElementById(`value-${lightId}`).textContent = value;
            document.getElementById(`intensity-value-${lightId}`).textContent = getIntensityLabel(value);
            
            // Actualizar en los datos
            const light = lights.find(l => l.id === lightId);
            if (light) {
                light.intensity = parseInt(value);
            }
        }

        // Obtener etiqueta descriptiva para la intensidad
        function getIntensityLabel(value) {
            const intensity = parseInt(value);
            if (intensity === 0) return 'Apagado';
            if (intensity <= 25) return 'Muy Baja';
            if (intensity <= 50) return 'Baja';
            if (intensity <= 75) return 'Media';
            return 'Alta';
        }

        // Enviar configuración al ESP32
        function sendToESP32(lightId) {
            const light = lights.find(l => l.id === lightId);
            if (!light) return;
            
            // Simular envío al ESP32
            showNotification(`Enviando configuración a ESP32: Aula ${light.classroom} - Intensidad ${light.intensity}%`);
            
            // En una implementación real, aquí harías una petición HTTP al ESP32
            // fetch(`http://192.168.1.100/light`, {
            //     method: 'POST',
            //     body: JSON.stringify({
            //         classroom: light.classroom,
            //         intensity: light.intensity
            //     })
            // });
        }

        // Cambiar entre modo automático y manual
        function toggleAutomatic(lightId) {
            const light = lights.find(l => l.id === lightId);
            if (light) {
                light.automatic = !light.automatic;
                showNotification(`Modo ${light.automatic ? 'automático' : 'manual'} activado para ${light.classroom}`);
                loadLights(); // Recargar para mostrar el cambio
            }
        }

        // El resto del código existente (para aulas, horarios, docentes, materias) se mantiene igual
        // ... (loadClassrooms, loadTeachers, loadSubjects, etc.)

        // Cargar trimestres
        function loadTrimesters() {
            scheduleContainer.style.display = 'none';
        }

        // Seleccionar trimestre
        function selectTrimester(trimester) {
            currentTrimester = trimester;
            scheduleContainer.style.display = 'block';
            loadDaySelector();
            loadScheduleTable();
        }

        // Cargar selector de días
        function loadDaySelector() {
            daySelector.innerHTML = '';
            const days = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
            
            days.forEach(day => {
                const dayBtn = document.createElement('button');
                dayBtn.className = `day-btn ${day === currentDay ? 'active' : ''}`;
                dayBtn.textContent = day;
                dayBtn.onclick = () => selectDay(day);
                daySelector.appendChild(dayBtn);
            });
        }

        // Seleccionar día
        function selectDay(day) {
            currentDay = day;
            loadDaySelector();
            loadScheduleTable();
        }

        // Cargar tabla de horarios
        function loadScheduleTable() {
            const scheduleData = schedules[currentTrimester][currentDay];
            const courses = Object.keys(scheduleData);
            const hours = ["1ra Hora", "2da Hora", "3ra Hora", "4ta Hora"];
            
            let tableHTML = `
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            ${hours.map(hour => `<th>${hour}</th>`).join('')}
                        </tr>
                    </thead>
                    <tbody>
            `;
            
            courses.forEach(course => {
                tableHTML += `
                    <tr>
                        <td><strong>${course}</strong></td>
                        ${scheduleData[course].map(aula => `
                            <td class="class-cell">${aula}</td>
                        `).join('')}
                    </tr>
                `;
            });
            
            tableHTML += `
                    </tbody>
                </table>
            `;
            
            scheduleTableContainer.innerHTML = tableHTML;
        }

        // Cargar docentes
        function loadTeachers() {
            teachersContainer.innerHTML = '';
            
            teachers.forEach(teacher => {
                const teacherCard = document.createElement('div');
                teacherCard.className = 'teacher-card';
                
                teacherCard.innerHTML = `
                    <div class="teacher-name">${teacher.name}</div>
                    <div class="teacher-info">
                        <p><strong>Especialidad:</strong> ${teacher.specialty}</p>
                        <p><strong>Email:</strong> ${teacher.email}</p>
                        <p><strong>Teléfono:</strong> ${teacher.phone}</p>
                        <p><strong>Cursos:</strong> ${teacher.courses}</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-small" onclick="editTeacher(${teacher.id})">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-small" onclick="deleteTeacher(${teacher.id})">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                `;
                
                teachersContainer.appendChild(teacherCard);
            });
        }

        // Cargar materias
        function loadSubjects() {
            subjectsContainer.innerHTML = '';
            
            subjects.forEach(subject => {
                const subjectCard = document.createElement('div');
                subjectCard.className = 'subject-card';
                
                subjectCard.innerHTML = `
                    <div class="subject-name">${subject.name}</div>
                    <div class="subject-info">
                        <p><strong>Descripción:</strong> ${subject.description}</p>
                        <p><strong>Docente:</strong> ${subject.teacher}</p>
                    </div>
                    <div class="task-list">
                        <h4>Tareas asignadas:</h4>
                        ${subject.tasks.length > 0 ? subject.tasks.map(task => `
                            <div class="task-item">
                                <div class="task-info">
                                    <h4>${task.title}</h4>
                                    <p>${task.description}</p>
                                    <p><strong>Entrega:</strong> ${task.deadline} | <strong>Curso:</strong> ${task.course}</p>
                                    <p><em>Asignado por: ${task.teacher}</em></p>
                                </div>
                                <div class="task-actions">
                                    <button onclick="deleteTask(${subject.id}, ${task.id})">Eliminar</button>
                                </div>
                            </div>
                        `).join('') : '<p>No hay tareas asignadas</p>'}
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-small" onclick="openTaskModal(${subject.id})">
                            <i class="fas fa-plus"></i> Agregar Tarea
                        </button>
                    </div>
                `;
                
                subjectsContainer.appendChild(subjectCard);
            });
        }

        // Abrir modal de docente
        function openTeacherModal(teacherId = null) {
            const modal = document.getElementById('teacher-modal');
            const title = document.getElementById('teacher-modal-title');
            const form = document.getElementById('teacher-form');
            
            if (teacherId) {
                title.textContent = 'Editar Docente';
                const teacher = teachers.find(t => t.id === teacherId);
                document.getElementById('teacher-id').value = teacher.id;
                document.getElementById('teacher-name').value = teacher.name;
                document.getElementById('teacher-email').value = teacher.email;
                document.getElementById('teacher-phone').value = teacher.phone;
                document.getElementById('teacher-specialty').value = teacher.specialty;
                document.getElementById('teacher-courses').value = teacher.courses;
            } else {
                title.textContent = 'Agregar Nuevo Docente';
                form.reset();
                document.getElementById('teacher-id').value = '';
            }
            
            modal.style.display = 'flex';
        }

        // Abrir modal de tarea
        function openTaskModal(subjectId) {
            const modal = document.getElementById('task-modal');
            taskSubjectIdInput.value = subjectId;
            
            // Cargar docentes en el select
            taskTeacherSelect.innerHTML = '<option value="">Seleccionar docente</option>';
            teachers.forEach(teacher => {
                const option = document.createElement('option');
                option.value = teacher.name;
                option.textContent = teacher.name;
                taskTeacherSelect.appendChild(option);
            });
            
            taskForm.reset();
            modal.style.display = 'flex';
        }

        // Editar docente
        function editTeacher(teacherId) {
            openTeacherModal(teacherId);
        }

        // Eliminar docente
        function deleteTeacher(teacherId) {
            if (confirm('¿Estás seguro de que deseas eliminar este docente?')) {
                teachers = teachers.filter(teacher => teacher.id !== teacherId);
                loadTeachers();
                showNotification('Docente eliminado correctamente');
            }
        }

        // Eliminar tarea
        function deleteTask(subjectId, taskId) {
            if (confirm('¿Estás seguro de que deseas eliminar esta tarea?')) {
                const subject = subjects.find(s => s.id === subjectId);
                subject.tasks = subject.tasks.filter(task => task.id !== taskId);
                loadSubjects();
                showNotification('Tarea eliminada correctamente');
            }
        }

        // Procesar formulario de docente
        function handleTeacherSubmit(e) {
            e.preventDefault();
            
            const teacherId = teacherIdInput.value;
            const name = document.getElementById('teacher-name').value;
            const email = document.getElementById('teacher-email').value;
            const phone = document.getElementById('teacher-phone').value;
            const specialty = document.getElementById('teacher-specialty').value;
            const courses = document.getElementById('teacher-courses').value;
            
            if (teacherId) {
                // Editar docente existente
                const teacherIndex = teachers.findIndex(t => t.id == teacherId);
                teachers[teacherIndex] = {
                    id: parseInt(teacherId),
                    name,
                    email,
                    phone,
                    specialty,
                    courses
                };
                showNotification('Docente actualizado correctamente');
            } else {
                // Agregar nuevo docente
                const newTeacher = {
                    id: Date.now(),
                    name,
                    email,
                    phone,
                    specialty,
                    courses
                };
                teachers.push(newTeacher);
                showNotification('Docente agregado correctamente');
            }
            
            loadTeachers();
            closeTeacherModal();
        }

        // Procesar formulario de tarea
        function handleTaskSubmit(e) {
            e.preventDefault();
            
            const subjectId = parseInt(taskSubjectIdInput.value);
            const title = document.getElementById('task-title').value;
            const description = document.getElementById('task-description').value;
            const deadline = document.getElementById('task-deadline').value;
            const teacher = document.getElementById('task-teacher').value;
            const course = document.getElementById('task-course').value;
            
            const subject = subjects.find(s => s.id === subjectId);
            if (subject) {
                const newTask = {
                    id: Date.now(),
                    title,
                    description,
                    deadline,
                    teacher,
                    course
                };
                subject.tasks.push(newTask);
                loadSubjects();
                closeTaskModal();
                showNotification('Tarea agregada correctamente');
            }
        }

        // Cerrar modales
        function closeReservationModal() {
            reservationModal.style.display = 'none';
            reservationForm.reset();
        }

        function closeTeacherModal() {
            teacherModal.style.display = 'none';
            teacherForm.reset();
        }

        function closeTaskModal() {
            taskModal.style.display = 'none';
            taskForm.reset();
        }

        // Resto del código para aulas (se mantiene igual)
        function loadClassrooms() {
            classroomsContainer.innerHTML = '';
            
            classrooms.forEach(classroom => {
                const classroomCard = document.createElement('div');
                classroomCard.className = `classroom-card ${classroom.status}`;
                
                classroomCard.innerHTML = `
                    <div class="classroom-name">${classroom.name}</div>
                    <div class="status ${classroom.status}">
                        ${classroom.status === 'occupied' ? 'OCUPADO' : 'DISPONIBLE'}
                    </div>
                    <div class="classroom-info">
                        <p><strong>Capacidad:</strong> ${classroom.capacity} estudiantes</p>
                        <p><strong>Equipamiento:</strong> ${classroom.equipment}</p>
                        ${classroom.currentCourse ? `<p><strong>En uso por:</strong> ${classroom.currentCourse}</p>` : ''}
                    </div>
                    <button class="btn reserve-btn" data-id="${classroom.id}">Reservar Aula</button>
                    
                    ${classroom.reservations.length > 0 ? `
                    <div class="reservation-list">
                        <h4>Próximas reservas:</h4>
                        ${classroom.reservations.map(reservation => `
                            <div class="reservation-item">
                                <div class="reservation-info">
                                    <h4>${reservation.course}</h4>
                                    <p>${reservation.date} a las ${reservation.time} (${reservation.duration}h)</p>
                                    <p><em>${reservation.teacher}</em></p>
                                </div>
                                <div class="reservation-actions">
                                    <button class="cancel-reservation" data-id="${reservation.id}">Cancelar</button>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                    ` : ''}
                `;
                
                classroomsContainer.appendChild(classroomCard);
            });
            
            document.querySelectorAll('.reserve-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    openReservationModal(id);
                });
            });
            
            document.querySelectorAll('.cancel-reservation').forEach(btn => {
                btn.addEventListener('click', function() {
                    const reservationId = this.getAttribute('data-id');
                    cancelReservation(reservationId);
                });
            });
        }

        function openReservationModal(classroomId) {
            classroomIdInput.value = classroomId;
            reservationModal.style.display = 'flex';
        }

        function handleReservationSubmit(e) {
            e.preventDefault();
            
            const classroomId = parseInt(classroomIdInput.value);
            const date = document.getElementById('reservation-date').value;
            const time = document.getElementById('reservation-time').value;
            const duration = document.getElementById('reservation-duration').value;
            const course = document.getElementById('reservation-course').value;
            const teacher = document.getElementById('reservation-teacher').value;
            
            const reservationId = Date.now();
            
            const classroomIndex = classrooms.findIndex(c => c.id === classroomId);
            if (classroomIndex !== -1) {
                classrooms[classroomIndex].reservations.push({
                    id: reservationId,
                    date,
                    time,
                    duration,
                    course,
                    teacher
                });
                
                loadClassrooms();
                closeReservationModal();
                showNotification('¡Reserva realizada con éxito!');
            }
        }

        function cancelReservation(reservationId) {
            if (confirm('¿Estás seguro de que deseas cancelar esta reserva?')) {
                classrooms.forEach(classroom => {
                    const reservationIndex = classroom.reservations.findIndex(r => r.id == reservationId);
                    if (reservationIndex !== -1) {
                        classroom.reservations.splice(reservationIndex, 1);
                    }
                });
                
                loadClassrooms();
                showNotification('Reserva cancelada correctamente');
            }
        }

        function showNotification(message) {
            notification.textContent = message;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Event Listeners
        closeBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const modal = this.closest('.modal');
                if (modal.id === 'reservation-modal') closeReservationModal();
                if (modal.id === 'teacher-modal') closeTeacherModal();
                if (modal.id === 'task-modal') closeTaskModal();
            });
        });

        reservationForm.addEventListener('submit', handleReservationSubmit);
        teacherForm.addEventListener('submit', handleTeacherSubmit);
        taskForm.addEventListener('submit', handleTaskSubmit);

        window.addEventListener('click', function(e) {
            if (e.target === reservationModal) closeReservationModal();
            if (e.target === teacherModal) closeTeacherModal();
            if (e.target === taskModal) closeTaskModal();
        });

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