<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Carpetas | Nexgomez</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #1f1f3d 0%, #0a0a1a 100%);
            color: #ffffff;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
        }
        header img {
            max-width: 200px;
            filter: drop-shadow(0 0 10px rgba(0, 191, 255, 0.6));
            margin-bottom: 15px;
        }
        h1 {
            font-weight: 300;
            font-size: 2.5em;
            color: #00bfff;
        }
        .carpetas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1000px;
        }
        .carpeta-item {
            background: rgba(43, 43, 68, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .carpeta-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 191, 255, 0.3);
            background: rgba(53, 53, 88, 0.6);
        }
        .carpeta-logo {
            font-size: 4em;
            margin-bottom: 15px;
            color: #00bfff;
            transition: color 0.3s;
        }
        .carpeta-item:hover .carpeta-logo {
            color: #ffffff;
        }
        .carpeta-item h3 {
            margin: 0;
            font-size: 1.2em;
            font-weight: 400;
        }
        @media (max-width: 600px) {
            .carpetas-grid {
                grid-template-columns: 1fr;
            }
            .carpeta-logo {
                font-size: 3em;
            }
        }
    </style>
</head>
<body>

    <header>
        <img src="Logoalex.png" alt="Logo Nexgomez">
        <h1>Carpetas de Inicio</h1>
        <p>Selecciona una carpeta para continuar</p>
    </header>

    <div class="carpetas-grid">
        <?php
        $directorio = "carpeta_inicio";
        if (is_dir($directorio)) {
            $carpetas = scandir($directorio);
            foreach ($carpetas as $carpeta) {
                if ($carpeta != "." && $carpeta != ".." && is_dir($directorio . "/" . $carpeta)) {
                    echo '
                    <div class="carpeta-item" onclick="window.location.href=\''.$directorio.'/'.$carpeta.'\'">
                        <i class="fas fa-folder carpeta-logo"></i>
                        <h3>'.$carpeta.'</h3>
                    </div>
                    ';
                }
            }
        } else {
            echo "<p>No se encontró la carpeta 'carpeta_inicio'.</p>";
        }
        ?>
    </div>

</body>
</html>
