<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liga de Fútbol de Nariño - Ente rector del fútbol aficionado en Nariño. Promovemos torneos, formación deportiva y desarrollo de talentos en todas las modalidades.">
    <meta name="keywords" content="fútbol Nariño, liga deportiva, torneos fútbol, fútbol aficionado, selecciones Nariño, formación deportiva">
    <meta name="author" content="Liga de Fútbol de Nariño">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ligadefutboldenarino.com/">
    <meta property="og:title" content="Liga de Fútbol de Nariño">
    <meta property="og:description" content="Ente rector del fútbol aficionado en Nariño. Organizamos torneos, formamos talento y representamos al departamento.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Liga de Fútbol de Nariño">

    <!-- SEO adicional -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#0e0022">
    <link rel="canonical" href="https://ligadefutboldenarino.com/">

    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>Liga de Fútbol de Nariño</title>

    <!-- PWA Manifest -->
    <link rel="manifest" href="/manifest.json">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">

    <!-- Preconnect para optimización -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts - Manrope (oficial) -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Estilos principales -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/pages.css">

    <?php if(isset($additionalCSS)): ?>
        <?php foreach($additionalCSS as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">

    <!-- Header / Navigation -->
    <header id="header" class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="/index.php" class="logo">
                        <img src="/assets/images/logo.webp" alt="Liga de Fútbol de Nariño" class="logo-img">
                    </a>

                    <ul class="nav-menu" id="navMenu">
                        <li><a href="/index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Inicio</a></li>
                        <li><a href="/pages/nosotros.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'nosotros.php') ? 'active' : ''; ?>">Nosotros</a></li>
                        <li><a href="/pages/servicios.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'servicios.php') ? 'active' : ''; ?>">Servicios</a></li>
                        <li><a href="/pages/selecciones.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'selecciones.php') ? 'active' : ''; ?>">Selecciones</a></li>
                        <li><a href="/pages/torneos.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'torneos.php') ? 'active' : ''; ?>">Torneos</a></li>
                        <li><a href="/pages/afiliacion.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'afiliacion.php') ? 'active' : ''; ?>">Afiliación</a></li>
                        <li><a href="/pages/noticias.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'noticias.php') ? 'active' : ''; ?>">Noticias</a></li>
                        <li><a href="/pages/contacto.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacto.php') ? 'active' : ''; ?>">Contacto</a></li>
                    </ul>

                    <a href="/pages/afiliacion.php" class="cta-button">Afiliate Ahora</a>

                    <button class="hamburger" id="hamburger" aria-label="Menú">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->