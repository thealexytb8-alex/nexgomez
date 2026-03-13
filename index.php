<!DOCTYPE html>
<! ECHO POR GOMEZ ALEXANDER -   N E X G O M E Z ¡>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N E X G O M E Z - Desarrollador de Software</title>
  <link rel="icon" type="image/x-icon" href="ruedalogo.ico">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        :root {
            --color-primary: #0099ff; 
            --color-secondary: #00d4ff; 
            --color-dark: #121212; 
            --color-medium-dark: #1e1e1e; 
            --color-light: #f0f0f0; 
            --color-grey: #a0a0a0; 
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Roboto', sans-serif;
            --transition-speed: 0.4s ease-in-out;
            --shadow-light: rgba(255, 255, 255, 0.05);
            --shadow-dark: rgba(0, 0, 0, 0.6);
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
            opacity: 0; 
            transition: opacity 0.8s ease-in;
        }

        body.loaded {
            opacity: 1; 
        }
        
        html {
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--color-dark); 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .preloader-logo {
            width: 280px; 
            height: auto;
            animation: preloader-fade-in 1.5s ease-in-out forwards;
            opacity: 0; 
        }

        .preloader-text {
            color: var(--color-light);
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-top: 20px;
            opacity: 0;
            animation: preloader-fade-in 1.5s ease-in-out 0.5s forwards; 
        }

        @keyframes preloader-fade-in {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 5%; 
            min-height: 70px;
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
            height: 90px; 
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
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .primary-btn {
            background-color: var(--color-primary);
            color: white;
            box-shadow: 0 8px 15px rgba(0, 153, 255, 0.5);
            margin: 0 10px;
        }
        .primary-btn:hover {
            background-color: #0077cc;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 20px rgba(0, 153, 255, 0.7);
        }
        .secondary-btn {
            background-color: transparent;
            color: var(--color-secondary);
            border: 2px solid var(--color-secondary);
            box-shadow: 0 4px 10px rgba(0, 212, 255, 0.3);
            margin: 0 10px;
        }
        .secondary-btn:hover {
            background-color: rgba(0, 212, 255, 0.1); 
            color: white;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 212, 255, 0.5);
        }
        
        .ripple-effect {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            background-color: rgba(255, 255, 255, 0.5);
            pointer-events: none;
            z-index: 2;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

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

        .hero-logo-top {
            width: 150px; 
            margin-bottom: 25px;
            animation: fadeIn 1s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero-content h2 {
            font-size: 4.2rem;
            margin-bottom: 1rem;
            color: white;
            line-height: 1.1;
            font-family: var(--font-heading);
            min-height: 120px; 
        }
        .hero-content .typing-container {
            display: inline-block;
        }
        .hero-content .highlight {
             color: var(--color-primary);
             font-weight: 700;
        }
        .cursor {
            display: inline-block;
            width: 4px;
            background-color: var(--color-secondary);
            animation: blink 0.7s infinite;
            margin-left: 5px;
            height: 50px;
            transform: translateY(10px);
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
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

        p {
            font-size: 1.1rem;
            color: var(--color-light);
            margin-bottom: 1rem;
        }
        h4 {
            font-size: 1.5rem;
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--color-light);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        .skill-item {
            background-color: var(--color-medium-dark);
            padding: 30px;
            border-radius: 15px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            text-align: left;
            box-shadow: 8px 8px 15px var(--shadow-dark), -8px -8px 15px var(--shadow-light); 
        }

        .skill-item:hover {
            transform: translateY(-5px) scale(1.01);
            box-shadow: 12px 12px 20px rgba(0, 0, 0, 0.7), -12px -12px 20px rgba(255, 255, 255, 0.08); 
            border-bottom: 3px solid var(--color-primary);
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
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .project-card {
            background-color: var(--color-dark);
            padding: 25px;
            border-radius: 15px;
            text-align: left;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
            box-shadow: 8px 8px 15px var(--shadow-dark), -8px -8px 15px rgba(255, 255, 255, 0.03); 
        }

        .project-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.8), -15px -15px 30px rgba(255, 255, 255, 0.05); 
            border: 1px solid var(--color-secondary); 
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
            color: var(--color-primary);
        }

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
            background-color: rgba(0, 0, 0, 0.85);
            z-index: -1;
        }

        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            background: rgba(30, 30, 30, 0.8);
            padding: 40px;
            border-radius: 15px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
            border: 1px solid var(--color-primary);
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
            border-color: var(--color-secondary);
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.3);
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }
        .contact-form .btn {
            width: 100%;
        }

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
            color: var(--color-primary);
            transform: translateY(-3px) scale(1.1);
        }

        .hidden {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        @media (max-width: 768px) {
            .main-header {
                flex-direction: column;
                padding: 1rem 3%;
                min-height: auto;
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
                min-height: 80px;
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
                height: 50px; 
            }
            .hero-logo-top {
                width: 100px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<div id="preloader">
    <img src="Logoalex.png" alt="Cargando NEXGOMEZ Logo" class="preloader-logo">
    <p class="preloader-text">CARGANDO...</p>
</div>


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
<main>
    <section id="inicio" class="hero hidden">
        <div class="hero-content">
            <img src="ruedalogo.png" alt="Logo NEXGOMEZ" class="hero-logo-top">
        
            <h2>
                <span id="typed-text-output"></span>
                <span class="cursor">|</span>
            </h2>
            <p class="subtitle">Transformo ideas en soluciones tecnológicas robustas y escalables. Apasionado por crear experiencias digitales innovadoras.</p>
            <a href="#proyectos" class="btn primary-btn"><span>Explora mis Proyectos</span></a>
            <a href="enlace_a_tu_cv.pdf" target="_blank" class="btn secondary-btn"><span>Descargar CV</span></a>
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
            <img src="igamen3.jpg" alt="Sistema de Gestión de Internet" class="project-image">
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
            <img src="imagen5.jpg" alt="Gestión para Arquitecto" class="project-image">
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
            <img src="imagen1.jpg" alt="Inventario de Tienda Web" class="project-image">
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
    <!-- Frase inspiradora -->
<section class="frase-banner">
  <h2>"No desarrollamos solo códigos, facilitamos tu vida ." </h2>
</section>

<style>
.frase-banner {
  text-align: center;
  padding: 50px 20px;
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
  color: #fff;
  font-family: 'Segoe UI', sans-serif;
}

.frase-banner h2 {
  font-size: 1.8rem;
  font-weight: 400;
  line-height: 1.5;
  animation: fadeIn 2s ease-in-out;
}

.frase-banner span {
  display: block;
  margin-top: 10px;
  font-size: 1rem;
  opacity: 0.8;
}

/* Animación */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>

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
</main>


<footer class="main-footer">
    <div class="container">
        <div class="social-links">
               <a href="https://github.com/thealexytb8-alex" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/alexander.gomez.306723" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
 <a href="https://wa.me/593985882430?text=Hola%2C%20estoy%20interesado%20en%20contratar%20tus%20servicios%20de%20desarrollo.%20Mi%20nombre%20es%3A" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>         
        </div>
        <p>&copy; 2025 NEXGOMEZ. Todos los derechos reservados.</p>
          <div class="developer-credit">
                <i class="fas fa-terminal" title="Desarrollado con Código"></i>
                <p>"La innovación distingue a los líderes de los seguidores." – Steve Jobs</p>
            </div>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const preloader = document.getElementById('preloader');
        const body = document.body;
        const typedTextOutput = document.getElementById('typed-text-output');
        const phrases = [
            "Líder en Desarrollo de Software",
            "Especialista en Back-end y Móvil",
            "Creando Experiencias Digitales Únicas"
        ];
        let phraseIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        window.addEventListener('load', () => {
            preloader.classList.add('hidden');
            setTimeout(() => {
                body.classList.add('loaded');
                typeText(); 
            }, 500); 
        });

        function typeText() {
            const currentPhrase = phrases[phraseIndex];
            
            if (isDeleting) {
                typedTextOutput.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
            } else {
                let textToWrite = currentPhrase.substring(0, charIndex + 1);
                if (phraseIndex === 0) {
                     textToWrite = textToWrite.replace("Líder en Desarrollo de Software", "Líder en <span class='highlight'>Desarrollo de Software</span>");
                } else if (phraseIndex === 1) {
                     textToWrite = textToWrite.replace("Especialista en Back-end y Móvil", "Especialista en <span class='highlight'>Back-end y Móvil</span>");
                } else if (phraseIndex === 2) {
                     textToWrite = textToWrite.replace("Creando Experiencias Digitales Únicas", "Creando <span class='highlight'>Experiencias Digitales Únicas</span>");
                }
                typedTextOutput.innerHTML = textToWrite;

                charIndex++;
            }

            let typeSpeed = 80; 
            
            if (isDeleting) {
                typeSpeed /= 2; 
            }

            if (!isDeleting && charIndex === currentPhrase.length) {
                typeSpeed = 2000; 
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                typeSpeed = 500; 
            }

            setTimeout(typeText, typeSpeed);
        }

        const hiddenElements = document.querySelectorAll('.hidden');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    entry.target.classList.remove('hidden');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1 
        });

        hiddenElements.forEach(el => observer.observe(el));
        
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const buttonRect = this.getBoundingClientRect();
                
                const circle = document.createElement('span');
                this.appendChild(circle);
                
                const x = e.clientX - buttonRect.left;
                const y = e.clientY - buttonRect.top;
                
                const diameter = Math.max(this.clientWidth, this.clientHeight);
                const radius = diameter / 2;
                
                circle.style.width = circle.style.height = `${diameter}px`;
                circle.style.left = `${x - radius}px`;
                circle.style.top = `${y - radius}px`;
                circle.classList.add('ripple-effect');

                setTimeout(() => {
                    circle.remove();
                }, 600);
            });
        });
    });
</script>
</body>
</html>