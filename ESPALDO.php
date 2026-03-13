<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N E X G O M E Z</title>
    <link rel="icon" type="image/png" href="ruedalogo.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <style>
        /* VARIABLES y RESET */
        :root {
            --color-primary: #007bff; /* Azul vibrante */
            --color-secondary: #00d4ff; /* Azul cian para acentos */
            --color-dark: #121212; /* Fondo muy oscuro */
            --color-medium-dark: #1e1e1e; /* Fondo de secciones */
            --color-light: #e0e0e0; /* Texto principal */
            --color-grey: #a0a0a0; /* Texto secundario */
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Roboto', sans-serif;
            --transition-speed: 0.4s ease-in-out;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--color-dark);
            color: var(--color-light);
            line-height: 1.6;
            overflow-x: hidden; /* Prevenir scroll horizontal por animaciones */
        }

        html {
            scroll-behavior: smooth;
        }

        /* UTILIDADES */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

 /* Dentro de tu bloque <style> */

.main-header {
    display: flex;
    justify-content: space-between;
    align-items: center; /* ESTO CENTRA VERTICALMENTE TODO */
    padding: 1rem 5%;
    /* Añadimos una altura mínima para que el logo quepa holgadamente */
    min-height: 90px; 
    
    background-color: var(--color-dark);
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .logo-icon {
            width: 35px; /* Tamaño del icono */
            height: 35px;
            filter: invert(1); /* Invierte el logo negro a blanco */
            margin-right: 12px;
            animation: pulse 2s infinite ease-in-out; /* Animación de pulso para el icono */
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .logo {
            font-family: var(--font-heading);
            color: var(--color-light); 
            font-size: 2rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .logo span {
            color: var(--color-secondary); /* Color acentuado para una parte del nombre si quieres */
        }
        
        .main-header nav ul {
            list-style: none;
            display: flex;
        }

        .main-header nav ul li a {
            color: var(--color-light);
            text-decoration: none;
            padding: 0.7rem 1.2rem;
            transition: var(--transition-speed);
            position: relative;
        }
        .main-header nav ul li a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-secondary);
            transition: var(--transition-speed);
            transform: translateX(-50%);
        }
        .main-header nav ul li a:hover::after {
            width: 80%;
        }
        .main-header nav ul li a:hover {
            color: var(--color-secondary);
        }

        /* BOTONES */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px; /* Bordes más redondeados */
            text-decoration: none;
            font-family: var(--font-heading);
            font-weight: 700;
            transition: var(--transition-speed);
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3); /* Sombra sutil */
        }

        .primary-btn {
            background-color: var(--color-primary);
            color: white;
            position: relative;
            overflow: hidden; /* Para el efecto ripple */
        }
        .primary-btn::before { /* Efecto ripple */
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s ease, height 0.4s ease;
            z-index: 0;
        }
        .primary-btn:hover::before {
            width: 200%;
            height: 200%;
        }
        .primary-btn span {
            position: relative;
            z-index: 1;
        }

        .primary-btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.5);
        }

        /* SECCIÓN HERO (INICIO) */
        .hero {
            min-height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://source.unsplash.com/1600x900/?coding,technology,abstract') no-repeat center center/cover; /* Imagen de fondo dinámica */
            position: relative;
            padding: 50px 5%;
            overflow: hidden;
        }
        .hero::before { /* Animación de partículas sutil */
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, transparent 20%, rgba(0, 123, 255, 0.1) 80%) no-repeat;
            background-size: 1000px 1000px;
            animation: particle-move 30s linear infinite alternate;
        }
        @keyframes particle-move {
            0% { background-position: 0% 0%; }
            100% { background-position: 100% 100%; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            transform: translateY(0); /* Estado inicial */
            opacity: 1;
            animation: fadeInTop 1.2s ease-out; /* Animación de aparición */
        }
        @keyframes fadeInTop {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-content h2 {
            font-size: 4.2rem;
            margin-bottom: 1rem;
            color: white;
            line-height: 1.1;
        }
        .hero-content .greeting {
            font-size: 1.6rem;
            color: var(--color-secondary);
            margin-bottom: 0.8rem;
            font-weight: 300;
        }
        .hero-content .subtitle {
            font-size: 1.8rem;
            color: var(--color-grey);
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }

        /* SECCIONES GENERALES */
        section {
            padding: 100px 5%;
            text-align: center;
            position: relative;
            background-color: var(--color-medium-dark);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        section:nth-child(even) {
            background-color: var(--color-dark); /* Alternar colores de fondo */
        }


        .section-title {
            font-size: 3.2rem;
            color: var(--color-primary);
            margin-bottom: 50px;
            font-family: var(--font-heading);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -15px;
            width: 80px;
            height: 4px;
            background-color: var(--color-secondary);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* SECCIÓN DE HABILIDADES */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .skill-item {
            background: linear-gradient(145deg, #2c2c2c, #1f1f1f);
            padding: 30px;
            border-radius: 12px;
            border-left: 5px solid var(--color-secondary);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .skill-item:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 123, 255, 0.3);
            border-left-color: var(--color-primary);
        }

        .skill-item h4 {
            color: var(--color-primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-family: var(--font-heading);
            font-weight: 700;
        }
        .skill-item p {
            color: var(--color-grey);
            font-size: 1.05rem;
        }
        .skill-item i { /* Iconos para las habilidades */
            font-size: 2.5rem;
            color: var(--color-secondary);
            margin-bottom: 15px;
            display: block;
        }

        /* SECCIÓN DE PROYECTOS */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .project-card {
            background-color: #252525;
            padding: 25px;
            border-radius: 12px;
            text-align: left;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 123, 255, 0.2);
        }

        .project-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 123, 255, 0.4);
        }
        .project-card h4 {
            color: var(--color-light);
            margin-bottom: 10px;
            font-size: 1.8rem;
            font-family: var(--font-heading);
            font-weight: 700;
        }
        .project-card p {
            color: var(--color-grey);
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .project-link {
            color: var(--color-secondary);
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 15px;
            transition: color 0.3s;
        }
        .project-link:hover {
            color: var(--color-primary);
            text-decoration: underline;
        }
        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: transform 0.4s ease;
        }
        .project-card:hover .project-image {
            transform: scale(1.05);
        }
        /* Iconos de tecnología en proyectos */
        .tech-icons {
            margin-top: 15px;
        }
        .tech-icons i {
            font-size: 1.5rem;
            color: var(--color-grey);
            margin-right: 10px;
            transition: color 0.3s;
        }
        .tech-icons i:hover {
            color: var(--color-secondary);
        }


        /* SECCIÓN DE CONTACTO */
        .contact-section {
            background-color: var(--color-medium-dark);
            background-image: url('https://source.unsplash.com/1600x900/?contact,network,abstract'); /* Fondo para contacto */
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }
        .contact-section::before { /* Overlay para el fondo */
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: -1;
        }

        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            background: linear-gradient(145deg, #1e1e1e, #0e0e0e);
            padding: 40px;
            border-radius: 15px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(0, 123, 255, 0.3);
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #333;
            border-radius: 8px;
            background-color: #282828;
            color: var(--color-light);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }
        .contact-form .btn {
            width: 100%;
        }

        /* FOOTER */
        .main-footer {
            text-align: center;
            padding: 30px 5%;
            background-color: #0d0d0d;
            border-top: 3px solid var(--color-primary);
            color: var(--color-grey);
            font-size: 0.9rem;
        }

        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            color: var(--color-light);
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.8rem;
            transition: color 0.3s, transform 0.3s;
        }
        .social-links a:hover {
            color: var(--color-secondary);
            transform: translateY(-3px) scale(1.1);
        }

        /* ANIMACIÓN DE APARICIÓN (Scroll Reveal) */
        .hidden {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* RESPONSIVE DESIGN (para dispositivos móviles) */
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                padding: 1rem 3%;
            }
            .main-header nav ul {
                padding: 10px 0;
                flex-wrap: wrap; /* Permite que los enlaces se envuelvan */
                justify-content: center;
            }
            .main-header nav ul li a {
                padding: 0.5rem 0.8rem;
                font-size: 0.9rem;
            }
            .hero-content h2 {
                font-size: 3rem;
            }
            .hero-content .subtitle {
                font-size: 1.2rem;
            }
            .section-title {
                font-size: 2.2rem;
            }
            section {
                padding: 60px 3%;
            }
            .skills-grid, .projects-grid {
                grid-template-columns: 1fr; /* Una columna en móviles */
            }
            .logo {
                font-size: 1.5rem;
            }
            .logo-icon {
                width: 28px;
                height: 28px;
            }
        }/* Dentro de tu bloque <style> */

/* Modifica esta clase o añade una nueva */
.full-logo-image {
    height: 40px; /* Ajusta la altura de tu logo completo como desees */
    /* Elimina 'filter: invert(1);' de aquí, ya que el logo ya está claro */
    width: auto; /* Mantiene la proporción */
    transition: transform 0.3s ease-in-out;
}

.full-logo-image:hover {
    transform: scale(1.05); /* Pequeña animación al pasar el ratón */
}

/* Puedes eliminar los estilos anteriores .logo-icon y .logo si ya no usas el texto por separado */
/*
.logo-icon {
    display: none; // Si no lo vas a usar
}
.logo {
    display: none; // Si no lo vas a usar
}
*//* Dentro de tu bloque <style> */

/* Dentro de tu bloque <style> */

.main-header {
    display: flex;
    justify-content: space-between;
    align-items: center; 
    
    /* ELIMINAMOS EL PADDING VERTICAL, solo queda el horizontal */
    padding: 0 5%; 
    
    /* Mínima altura posible para contener tu logo de 70px */
    min-height: 70px; 
    
    background-color: var(--color-dark);
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

.full-logo-image {
    /* Logo más grande */
    height: 100px; 
    
    width: auto; /* Mantiene la proporción */
    transition: transform 0.4s ease-in-out;
}
    </style>
</head>
<body>

<header class="main-header">
    <div class="logo-container">
        <img src="Logoalex.png" alt="NEXGOMEZ Logo" class="full-logo-image">
    </div>
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#habilidades">Habilidades</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
</header>
    <section id="inicio" class="hero hidden">
        <div class="hero-content">
            <p class="greeting">¡Hola a todos, soy Diego Alexander Gómez Barba!</p>
            <h2>Tecnólogo Superior en <span class="highlight">Desarrollo de Software</span></h2>
            <p class="subtitle">Con 24 años, transformo ideas en soluciones tecnológicas robustas y escalables. Apasionado por crear experiencias digitales innovadoras.</p>
            <a href="#proyectos" class="btn primary-btn"><span>Explora mis Proyectos</span></a>
        </div>
    </section>

    <section id="habilidades" class="skills-section hidden">
        <h3 class="section-title">Mi Stack Tecnológico</h3>
        <div class="container skills-grid">
            <div class="skill-item" data-skill="Java, Kotlin, C++">
                <i class="fas fa-code"></i>
                <h4>Backend & Desarrollo Móvil</h4>
                <p>Especialista en construir la lógica robusta de servidores con **Java**, y aplicaciones móviles nativas de alto rendimiento con **Kotlin** y **C++**.</p>
            </div>
            <div class="skill-item" data-skill="PHP">
                <i class="fas fa-server"></i>
                <h4>Desarrollo Web Dinámico (PHP)</h4>
                <p>Implementación de sistemas web interactivos, APIs RESTful y bases de datos eficientes con **PHP**.</p>
            </div>
            <div class="skill-item" data-skill="HTML, CSS, JS">
                <i class="fas fa-palette"></i>
                <h4>Frontend & Experiencia de Usuario</h4>
                <p>Creación de interfaces de usuario modernas, intuitivas y animadas con **HTML5, CSS3 y JavaScript**.</p>
            </div>
        </div>
    </section>

<section id="proyectos" class="projects-section hidden">
        <h3 class="section-title">Proyectos Destacados</h3>
        <div class="container projects-grid">

            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?isp,billing,network" alt="Sistema de Gestión de Internet" class="project-image">
                <h4>Sistema Integral: Cobros, Inventario y Cortes ISP (PHP/Java)</h4>
                <p>Desarrollo de una solución completa para la gestión de proveedores de servicios de Internet (ISP). Incluye módulos de **cobros automatizados**, control de **inventario** de equipos y lógica para la **activación/corte de servicio** (hotspot). Backend desarrollado con **PHP** y tareas críticas en **Java**.</p>
                <div class="tech-icons">
                    <i class="fab fa-php" title="PHP"></i>
                    <i class="fab fa-java" title="Java"></i>
                    <i class="fas fa-database" title="MySQL"></i>
                    <i class="fas fa-network-wired" title="Redes"></i>
                </div>
                <a href="#" target="_blank" class="project-link">Ver Detalles</a>
            </article>

            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?architecture,inventory,project-management" alt="Gestión para Arquitecto" class="project-image">
                <h4>Sistema de Inventario y Gestión para Arquitectura (Kotlin/Web)</h4>
                <p>Aplicación diseñada para un arquitecto para la gestión de proyectos, materiales e **inventario de obra**. Permite el seguimiento de recursos, presupuestos y progreso. Se implementó una solución móvil con **Kotlin** y un panel de control web responsivo.</p>
                <div class="tech-icons">
                    <i class="fab fa-kotlin" title="Kotlin"></i>
                    <i class="fab fa-html5" title="HTML5"></i>
                    <i class="fas fa-cubes" title="Inventario"></i>
                    <i class="fas fa-drafting-compass" title="Diseño"></i>
                </div>
                <a href="#" target="_blank" class="project-link">Ver Código (GitHub)</a>
            </article>
            
            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?retail,store,inventory" alt="Inventario de Tienda Web" class="project-image">
                <h4>Web App para Inventario y Stock de Tienda (PHP)</h4>
                <p>Desarrollo de un sistema web ligero y eficiente para que una tienda pueda gestionar su **inventario y stock en tiempo real**. Interfaz amigable para registro de entrada/salida de productos, alertas de stock mínimo y reportes básicos. Usando **PHP** para el *backend*.</p>
                <div class="tech-icons">
                    <i class="fab fa-php" title="PHP"></i>
                    <i class="fab fa-js-square" title="JavaScript"></i>
                    <i class="fas fa-shopping-cart" title="E-commerce"></i>
                    <i class="fas fa-sync" title="Tiempo Real"></i>
                </div>
                <a href="#" target="_blank" class="project-link">Ver Demo</a>
            </article>
            
        </div>
    </section>

    <section id="contacto" class="contact-section hidden">
        <h3 class="section-title">Contáctame para tu próximo proyecto</h3>
        <div class="container">
            <form action="contacto.php" method="POST" class="contact-form">
                <input type="text" name="nombre" placeholder="Tu Nombre" required>
                <input type="email" name="correo" placeholder="Tu Correo Electrónico" required>
                <textarea name="mensaje" placeholder="Describe tu proyecto o consulta..." rows="6" required></textarea>
                <button type="submit" class="btn primary-btn"><span>Enviar Mensaje</span></button>
                <p id="form-message" style="margin-top: 20px; color: var(--color-secondary); font-weight: bold;"></p>
            </form>
        </div><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N E X G O M E Z - Desarrollador de Software</title>
    <link rel="icon" type="image/png" href="ruedalogo.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght=500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* ======================================= */
        /* 1. PRELOADER (PANTALLA DE CARGA) */
        /* ======================================= */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--color-dark); /* Fondo oscuro como el body */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Asegura que esté por encima de todo */
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .preloader-logo {
            width: 250px; /* Tamaño grande para el logo en la carga */
            animation: preloader-fade-in 1.5s ease-in-out forwards;
            opacity: 0; /* Estado inicial para la animación */
        }

        /* Opcional: Animar solo la parte del icono del logo (si es un PNG/SVG con transparencia) */
        @keyframes preloader-fade-in {
            0% { opacity: 0; transform: scale(0.9); }
            50% { opacity: 1; transform: scale(1); }
            100% { opacity: 1; transform: scale(1); }
        }

        /* ======================================= */
        /* 2. VARIABLES y RESET */
        /* ======================================= */
        :root {
            --color-primary: #007bff; /* Azul vibrante */
            --color-secondary: #00d4ff; /* Azul cian para acentos */
            --color-dark: #121212; /* Fondo muy oscuro */
            --color-medium-dark: #1e1e1e; /* Fondo de secciones */
            --color-light: #e0e0e0; /* Texto principal */
            --color-grey: #a0a0a0; /* Texto secundario */
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Roboto', sans-serif;
            --transition-speed: 0.4s ease-in-out;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--color-dark);
            color: var(--color-light);
            line-height: 1.6;
            overflow-x: hidden;
            opacity: 0; /* Ocultar el body inicialmente hasta que el preloader termine */
            transition: opacity 0.8s ease-in;
        }

        body.loaded {
            opacity: 1; /* Mostrar el body una vez que el preloader se oculte */
        }
        
        html {
            scroll-behavior: smooth;
        }

        /* UTILIDADES */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ======================================= */
        /* 3. HEADER y NAVEGACIÓN */
        /* ======================================= */
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 5%; /* Ajuste vertical para un header más compacto */
            min-height: 80px;
            background-color: var(--color-dark);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .full-logo-image {
            height: 60px; /* Tamaño del logo ajustado para el header */
            width: auto;
            transition: transform 0.4s ease-in-out;
        }

        .full-logo-image:hover {
            transform: scale(1.05);
        }

        .main-header nav ul {
            list-style: none;
            display: flex;
        }

        .main-header nav ul li a {
            color: var(--color-light);
            text-decoration: none;
            padding: 0.7rem 1.2rem;
            transition: var(--transition-speed);
            position: relative;
        }
        .main-header nav ul li a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-secondary);
            transition: var(--transition-speed);
            transform: translateX(-50%);
        }
        .main-header nav ul li a:hover::after {
            width: 80%;
        }
        .main-header nav ul li a:hover {
            color: var(--color-secondary);
        }

        /* ======================================= */
        /* 4. BOTONES */
        /* ======================================= */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-family: var(--font-heading);
            font-weight: 700;
            transition: var(--transition-speed);
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            margin: 0 10px; /* Margen para separar el nuevo botón */
        }

        .primary-btn {
            background-color: var(--color-primary);
            color: white;
            position: relative;
            overflow: hidden;
        }
        /* Efecto ripple ya definido en el HTML, lo simplificamos aquí */

        .primary-btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.5);
        }
        
        /* Nuevo botón secundario */
        .secondary-btn {
            background-color: transparent;
            color: var(--color-secondary);
            border: 2px solid var(--color-secondary);
            box-shadow: none;
        }
        .secondary-btn:hover {
            background-color: rgba(0, 212, 255, 0.1); /* Ligero fondo al pasar el ratón */
            color: white;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 212, 255, 0.2);
        }

        /* ======================================= */
        /* 5. SECCIÓN HERO (INICIO) */
        /* ======================================= */
        .hero {
            min-height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://source.unsplash.com/1600x900/?coding,technology,abstract') no-repeat center center/cover;
            position: relative;
            padding: 50px 5%;
            overflow: hidden;
        }
        /* Animaciones del Hero */
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            animation: fadeInTop 1.2s ease-out;
        }
        @keyframes fadeInTop {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-content h2 {
            font-size: 4.2rem;
            margin-bottom: 1rem;
            color: white;
            line-height: 1.1;
        }
        .hero-content .greeting {
            font-size: 1.6rem;
            color: var(--color-secondary);
            margin-bottom: 0.8rem;
            font-weight: 300;
        }
        .hero-content .subtitle {
            font-size: 1.8rem;
            color: var(--color-grey);
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }

        /* ======================================= */
        /* 6. SECCIONES GENERALES, HABILIDADES, PROYECTOS y CONTACTO */
        /* ======================================= */
        section {
            padding: 100px 5%;
            text-align: center;
            position: relative;
            background-color: var(--color-medium-dark);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        section:nth-child(even) {
            background-color: var(--color-dark);
        }

        .section-title {
            font-size: 3.2rem;
            color: var(--color-primary);
            margin-bottom: 50px;
            font-family: var(--font-heading);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -15px;
            width: 80px;
            height: 4px;
            background-color: var(--color-secondary);
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* Habilidades */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        .skill-item {
            background: linear-gradient(145deg, #2c2c2c, #1f1f1f);
            padding: 30px;
            border-radius: 12px;
            border-left: 5px solid var(--color-secondary);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }
        .skill-item:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 123, 255, 0.3);
            border-left-color: var(--color-primary);
        }
        .skill-item h4 {
            color: var(--color-primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-family: var(--font-heading);
            font-weight: 700;
        }
        .skill-item p {
            color: var(--color-grey);
            font-size: 1.05rem;
        }
        .skill-item i {
            font-size: 2.5rem;
            color: var(--color-secondary);
            margin-bottom: 15px;
            display: block;
        }

        /* Proyectos */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .project-card {
            background-color: #252525;
            padding: 25px;
            border-radius: 12px;
            text-align: left;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 123, 255, 0.2);
        }

        .project-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 123, 255, 0.4);
        }
        .project-card h4 {
            color: var(--color-light);
            margin-bottom: 10px;
            font-size: 1.8rem;
            font-family: var(--font-heading);
            font-weight: 700;
        }
        .project-card p {
            color: var(--color-grey);
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .project-link {
            color: var(--color-secondary);
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 15px;
            transition: color 0.3s;
        }
        .project-link:hover {
            color: var(--color-primary);
            text-decoration: underline;
        }
        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: transform 0.4s ease;
        }
        .project-card:hover .project-image {
            transform: scale(1.05);
        }
        .tech-icons {
            margin-top: 15px;
        }
        .tech-icons i {
            font-size: 1.5rem;
            color: var(--color-grey);
            margin-right: 10px;
            transition: color 0.3s;
        }
        .tech-icons i:hover {
            color: var(--color-secondary);
        }

        /* Contacto */
        .contact-section {
            background-color: var(--color-medium-dark);
            background-image: url('https://source.unsplash.com/1600x900/?contact,network,abstract');
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: -1;
        }
        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            background: linear-gradient(145deg, #1e1e1e, #0e0e0e);
            padding: 40px;
            border-radius: 15px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(0, 123, 255, 0.3);
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #333;
            border-radius: 8px;
            background-color: #282828;
            color: var(--color-light);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }
        .contact-form .btn {
            width: 100%;
        }

        /* ======================================= */
        /* 7. FOOTER Y CRÉDITOS (Requerido) */
        /* ======================================= */
        .main-footer {
            text-align: center;
            padding: 30px 5%;
            background-color: #0d0d0d;
            border-top: 3px solid var(--color-primary);
            color: var(--color-grey);
            font-size: 0.9rem;
        }
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .social-links {
            margin-top: 10px;
        }
        .social-links a {
            color: var(--color-light);
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.8rem;
            transition: color 0.3s, transform 0.3s;
        }
        .social-links a:hover {
            color: var(--color-secondary);
            transform: translateY(-3px) scale(1.1);
        }
        
        .developer-credit {
            font-size: 0.8rem;
            color: var(--color-grey);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .developer-credit i {
            color: var(--color-secondary);
            font-size: 1.2rem;
        }

        /* ======================================= */
        /* 8. ANIMACIÓN DE APARICIÓN (Scroll Reveal) */
        /* ======================================= */
        .hidden {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* ======================================= */
        /* 9. RESPONSIVE DESIGN */
        /* ======================================= */
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                padding: 1rem 3%;
                min-height: 100px;
            }
            .main-header nav ul {
                padding: 10px 0;
                flex-wrap: wrap;
                justify-content: center;
            }
            .main-header nav ul li a {
                padding: 0.5rem 0.8rem;
                font-size: 0.9rem;
            }
            .hero-content h2 {
                font-size: 3rem;
            }
            .hero-content .subtitle {
                font-size: 1.2rem;
            }
            .section-title {
                font-size: 2.2rem;
            }
            section {
                padding: 60px 3%;
            }
            .skills-grid, .projects-grid {
                grid-template-columns: 1fr;
            }
            .full-logo-image {
                height: 45px;
            }
            .btn {
                margin: 10px 0;
                display: block; /* Que los botones ocupen todo el ancho en móvil */
            }
            .developer-credit {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>

    <div id="preloader">
        <img src="Logoalex.png" alt="Cargando NEXGOMEZ" class="preloader-logo">
    </div>

    <header class="main-header">
        <div class="logo-container">
            <img src="Logoalex.png" alt="Logo de NEXGOMEZ - Diego Alexander Gómez Barba" class="full-logo-image">
        </div>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio" class="hero hidden">
        <div class="hero-content">
            <p class="greeting">¡Hola a todos, soy Diego Alexander Gómez Barba!</p>
            <h2>Tecnólogo Superior en <span class="highlight">Desarrollo de Software</span></h2>
            <p class="subtitle">Con 24 años, transformo ideas en soluciones tecnológicas robustas y escalables. Apasionado por crear experiencias digitales innovadoras.</p>
            
            <a href="#proyectos" class="btn primary-btn"><span>Explora mis Proyectos</span></a>
            <a href="URL_A_TU_CV_O_LINKEDIN" target="_blank" rel="noopener noreferrer" class="btn secondary-btn"><span>Ver CV / Perfil</span></a> 
        </div>
    </section>

    <section id="habilidades" class="skills-section hidden">
        <h3 class="section-title">Mi Stack Tecnológico</h3>
        <div class="container skills-grid">
            <div class="skill-item" data-skill="Java, Kotlin, C++">
                <i class="fas fa-code"></i>
                <h4>Backend & Desarrollo Móvil</h4>
                <p>Especialista en construir la lógica robusta de servidores con **Java**, y aplicaciones móviles nativas de alto rendimiento con **Kotlin** y **C++**.</p>
            </div>
            <div class="skill-item" data-skill="PHP">
                <i class="fas fa-server"></i>
                <h4>Desarrollo Web Dinámico (PHP)</h4>
                <p>Implementación de sistemas web interactivos, APIs RESTful y bases de datos eficientes con **PHP**.</p>
            </div>
            <div class="skill-item" data-skill="HTML, CSS, JS">
                <i class="fas fa-palette"></i>
                <h4>Frontend & Experiencia de Usuario</h4>
                <p>Creación de interfaces de usuario modernas, intuitivas y animadas con **HTML5, CSS3 y JavaScript**.</p>
            </div>
        </div>
    </section>

    <section id="proyectos" class="projects-section hidden">
        <h3 class="section-title">Proyectos Destacados</h3>
        <div class="container projects-grid">

            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?isp,billing,network" alt="Sistema de Gestión de Internet para ISP" class="project-image">
                <h4>Sistema Integral: Cobros, Inventario y Cortes ISP (PHP/Java)</h4>
                <p>Desarrollo de una solución completa para la gestión de proveedores de servicios de Internet (ISP). Incluye módulos de **cobros automatizados**, control de **inventario** de equipos y lógica para la **activación/corte de servicio** (hotspot). Backend desarrollado con **PHP** y tareas críticas en **Java**.</p>
                <div class="tech-icons">
                    <i class="fab fa-php" title="PHP"></i>
                    <i class="fab fa-java" title="Java"></i>
                    <i class="fas fa-database" title="MySQL"></i>
                    <i class="fas fa-network-wired" title="Redes"></i>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="project-link">Ver Detalles</a>
            </article>

            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?architecture,inventory,project-management" alt="Aplicación de Gestión para Arquitectos" class="project-image">
                <h4>Sistema de Inventario y Gestión para Arquitectura (Kotlin/Web)</h4>
                <p>Aplicación diseñada para un arquitecto para la gestión de proyectos, materiales e **inventario de obra**. Permite el seguimiento de recursos, presupuestos y progreso. Se implementó una solución móvil con **Kotlin** y un panel de control web responsivo.</p>
                <div class="tech-icons">
                    <i class="fab fa-kotlin" title="Kotlin"></i>
                    <i class="fab fa-html5" title="HTML5"></i>
                    <i class="fas fa-cubes" title="Inventario"></i>
                    <i class="fas fa-drafting-compass" title="Diseño"></i>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="project-link">Ver Código (GitHub)</a>
            </article>
            
            <article class="project-card">
                <img src="https://source.unsplash.com/800x600/?retail,store,inventory" alt="Sistema de Inventario de Tienda en PHP" class="project-image">
                <h4>Web App para Inventario y Stock de Tienda (PHP)</h4>
                <p>Desarrollo de un sistema web ligero y eficiente para que una tienda pueda gestionar su **inventario y stock en tiempo real**. Interfaz amigable para registro de entrada/salida de productos, alertas de stock mínimo y reportes básicos. Usando **PHP** para el *backend*.</p>
                <div class="tech-icons">
                    <i class="fab fa-php" title="PHP"></i>
                    <i class="fab fa-js-square" title="JavaScript"></i>
                    <i class="fas fa-shopping-cart" title="E-commerce"></i>
                    <i class="fas fa-sync" title="Tiempo Real"></i>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="project-link">Ver Demo</a>
            </article>
            
        </div>
    </section>

    <section id="contacto" class="contact-section hidden">
        <h3 class="section-title">Contáctame para tu próximo proyecto</h3>
        <div class="container">
            <form action="contacto.php" method="POST" class="contact-form">
                <input type="text" name="nombre" placeholder="Tu Nombre" required>
                <input type="email" name="correo" placeholder="Tu Correo Electrónico" required>
                <textarea name="mensaje" placeholder="Describe tu proyecto o consulta..." rows="6" required></textarea>
                <button type="submit" class="btn primary-btn"><span>Enviar Mensaje</span></button>
                <p id="form-message" style="margin-top: 20px; color: var(--color-secondary); font-weight: bold;"></p>
            </form>
        </div>
    </section>

    <footer class="main-footer">
        <div class="footer-content container">
            <p>&copy; 2025 NEXGOMEZ. Todos los derechos reservados.</p>
            <div class="social-links">
                <a href="https://linkedin.com/in/diegogomezbarba" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/thealexytb8-alex" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fab fa-github"></i></a>
            </div>
            <div class="developer-credit">
                <i class="fas fa-terminal" title="Desarrollado con Código"></i>
                <p>Diseño y Desarrollo por: NEXGOMEZ</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. PRELOADER (FUNCIÓN DE PANTALLA DE CARGA)
            const preloader = document.getElementById('preloader');
            const body = document.body;
            
            // Simular un tiempo mínimo de carga para que la animación sea visible (1.5 segundos)
            setTimeout(() => {
                // Ocultar el preloader y mostrar el body
                preloader.classList.add('hidden');
                body.classList.add('loaded');
            }, 1500); // 1500ms = 1.5 segundos

            // 2. SCROLL REVEAL (Animación de aparición para secciones)
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Dejar de observar para que solo se anime una vez
                    }
                });
            }, {
                threshold: 0.2
            });

            document.querySelectorAll('section.hidden').forEach(section => {
                observer.observe(section);
            });

            // 3. Animación de los botones al hacer clic (efecto ripple)
            document.querySelectorAll('.primary-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    // Evita el ripple en el botón secundario
                    if (this.classList.contains('secondary-btn')) return; 

                    const x = e.clientX - e.target.getBoundingClientRect().left;
                    const y = e.clientY - e.target.getBoundingClientRect().top;
                    
                    const ripple = document.createElement('span');
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    
                    // Solo añadir si el elemento no contiene ya un ripple (prevención de bugs)
                    if (this.querySelectorAll('span').length < 2) { 
                        this.appendChild(ripple);
                    }
                    
                    // Eliminar el ripple después de la animación
                    ripple.addEventListener('transitionend', () => {
                         // Usar un temporizador para asegurar que la animación CSS termine
                         setTimeout(() => {
                             ripple.remove();
                         }, 400); 
                    });
                });
            });

            // 4. Manejo del formulario de contacto (Feedback visual)
            const contactForm = document.querySelector('.contact-form');
            const formMessage = document.getElementById('form-message');

            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault();

                formMessage.textContent = 'Enviando...';
                formMessage.style.color = 'var(--color-secondary)';
                
                // Simulación de envío (Reemplazar con tu lógica de PHP real)
                await new Promise(resolve => setTimeout(resolve, 1000)); 
                
                // Si la lógica de tu 'contacto.php' es exitosa:
                const isSuccess = true; // Cambiar por la respuesta real del servidor
                
                if (isSuccess) {
                    formMessage.style.color = 'var(--color-secondary)';
                    formMessage.textContent = '¡Mensaje enviado con éxito! Te contactaré pronto.';
                    contactForm.reset();
                } else {
                    formMessage.style.color = 'red';
                    formMessage.textContent = 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.';
                }
            });
        });
    </script>

</body>
</html>
    </section>

    <footer class="main-footer">
        <p>&copy; 2025 NEXGOMEZ. Todos los derechos reservados.</p>
        <div class="social-links">
            <a href="https://linkedin.com/in/diegogomezbarba" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/thealexytb8-alex" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. SCROLL REVEAL (Animación de aparición para secciones)
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2 // El 20% de la sección debe ser visible
            });

            document.querySelectorAll('section.hidden').forEach(section => {
                observer.observe(section);
            });

            // 2. Efecto de tecleo para el subtítulo en la sección Hero (Opcional, si quieres ese efecto)
            // const subtitle = document.querySelector('.hero-content .subtitle');
            // const originalText = subtitle.textContent;
            // subtitle.textContent = ''; // Limpiar el texto para el efecto de tecleo
            // let i = 0;
            // function typeWriter() {
            //     if (i < originalText.length) {
            //         subtitle.textContent += originalText.charAt(i);
            //         i++;
            //         setTimeout(typeWriter, 50); // Velocidad de tecleo
            //     }
            // }
            // setTimeout(typeWriter, 1500); // Retraso para iniciar el tecleo

            // 3. Animación de los botones al hacer clic (efecto ripple)
            document.querySelectorAll('.primary-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    const x = e.clientX - e.target.offsetLeft;
                    const y = e.clientY - e.target.offsetTop;
                    
                    const ripple = document.createElement('span');
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    this.appendChild(ripple);
                    
                    // Eliminar el ripple después de la animación
                    ripple.addEventListener('animationend', () => {
                        ripple.remove();
                    });
                });
            });

            // 4. Manejo del formulario de contacto (Feedback visual)
            const contactForm = document.querySelector('.contact-form');
            const formMessage = document.getElementById('form-message');

            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault(); // Previene el envío por defecto para manejarlo con JS/PHP

                const formData = new FormData(contactForm);
                const response = await fetch('contacto.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.text(); // o response.json() si PHP devuelve JSON

                if (response.ok && result.includes("success=true")) { // Asumiendo que PHP redirige o devuelve un mensaje simple
                    formMessage.style.color = 'var(--color-secondary)';
                    formMessage.textContent = '¡Mensaje enviado con éxito! Te contactaré pronto.';
                    contactForm.reset();
                } else {
                    formMessage.style.color = 'red';
                    formMessage.textContent = 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.';
                }
            });
        });
    </script>

</body>
</html>