<?php
$pageTitle = "Inicio";
$bodyClass = "home-page";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            <span class="subtitle">PASIÓN, FORMACIÓN Y DESARROLLO</span>
            <span class="main-title">FÚTBOL CON PROPÓSITO<br>EN NARIÑO</span>
        </h1>
        <p class="hero-description">Fomentamos, organizamos y fortalecemos el fútbol como instrumento de formación, inclusión y desarrollo social</p>
        <div class="hero-buttons">
            <a href="/pages/torneos.php" class="btn btn-primary">Ver Torneos</a>
            <a href="/pages/servicios.php" class="btn btn-secondary">Nuestros Servicios</a>
        </div>

        <!-- Stats -->
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number" data-target="40">0</span>
                <span class="stat-label">Municipios</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="5000">0</span>
                <span class="stat-label">Deportistas</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="20">0</span>
                <span class="stat-label">Años de Trayectoria</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="200">0</span>
                <span class="stat-label">Clubes Afiliados</span>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Descubre más</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- Quick Intro -->
<section class="quick-intro">
    <div class="container">
        <div class="intro-grid">
            <div class="intro-content">
                <span class="section-subtitle">¿QUIÉNES SOMOS?</span>
                <h2 class="section-title">Liga de Fútbol de Nariño</h2>
                <p class="intro-text">
                    Somos el <strong>ente rector del fútbol aficionado en Nariño</strong>, afiliados a la Federación Colombiana de Fútbol y a Difútbol. Promovemos la formación deportiva, la organización de torneos oficiales y la participación de nuestros clubes y selecciones en el ámbito regional y nacional.
                </p>
                <p class="intro-text">
                    Con más de 20 años de trayectoria, trabajamos para fortalecer el fútbol en todas sus modalidades como instrumento de formación, inclusión y desarrollo social en Nariño.
                </p>
                <a href="/pages/nosotros.php" class="btn btn-primary">Conoce Más Sobre Nosotros</a>
            </div>
            <div class="intro-image">
                <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=600&h=700&fit=crop" alt="Fútbol en Nariño" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="services-preview">
    <div class="container">
        <div class="section-header center">
            <span class="section-subtitle">LO QUE OFRECEMOS</span>
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-description">Programas integrales para el desarrollo del fútbol nariñense</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>Torneos Departamentales</h3>
                <p>Organizamos campeonatos oficiales en todas las categorías con respaldo arbitral y registro en COMET.</p>
                <a href="/pages/torneos.php" class="service-link">Ver Torneos <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card featured">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Selecciones Nariño</h3>
                <p>Proceso de identificación y desarrollo de talento para representar a Nariño en torneos nacionales.</p>
                <a href="/pages/selecciones.php" class="service-link">Conocer Selecciones <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Formación y Capacitación</h3>
                <p>Espacios de desarrollo académico para entrenadores, árbitros y dirigentes deportivos.</p>
                <a href="/pages/servicios.php#formacion" class="service-link">Ver Programas <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Afiliación de Clubes</h3>
                <p>Asesoría completa en el proceso de inscripción y formalización de clubes deportivos.</p>
                <a href="/pages/afiliacion.php" class="service-link">Afiliar mi Club <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="/pages/servicios.php" class="btn btn-primary">Ver Todos los Servicios</a>
        </div>
    </div>
</section>

<!-- Tournaments Highlight -->
<section class="tournaments-highlight">
    <div class="container">
        <div class="section-header center white">
            <span class="section-subtitle">COMPETENCIAS OFICIALES</span>
            <h2 class="section-title">Próximos Torneos</h2>
        </div>

        <div class="tournaments-slider">
            <div class="tournament-item">
                <div class="tournament-badge">Próximamente</div>
                <h3>Torneo de Liga 2025</h3>
                <p>Campeonato departamental en todas las categorías</p>
                <div class="tournament-info">
                    <span><i class="fas fa-calendar"></i> Enero - Junio 2025</span>
                    <span><i class="fas fa-map-marker-alt"></i> Todo Nariño</span>
                </div>
                <a href="/pages/torneos.php" class="btn btn-secondary">Más Información</a>
            </div>

            <div class="tournament-item">
                <div class="tournament-badge">En Curso</div>
                <h3>Fútbol Sala</h3>
                <p>Competencia indoor masculina y femenina</p>
                <div class="tournament-info">
                    <span><i class="fas fa-calendar"></i> Diciembre 2024</span>
                    <span><i class="fas fa-trophy"></i> Regional</span>
                </div>
                <a href="/pages/torneos.php" class="btn btn-secondary">Ver Resultados</a>
            </div>

            <div class="tournament-item">
                <div class="tournament-badge">Anual</div>
                <h3>Pacífico Beach Cup</h3>
                <p>Torneo de fútbol playa con proyección nacional</p>
                <div class="tournament-info">
                    <span><i class="fas fa-umbrella-beach"></i> Fútbol Playa</span>
                    <span><i class="fas fa-star"></i> Nacional</span>
                </div>
                <a href="/pages/torneos.php" class="btn btn-secondary">Inscripciones</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>¿Listo para ser parte de la familia del fútbol nariñense?</h2>
            <p>Afilia tu club, participa en nuestros torneos y forma parte del desarrollo deportivo de Nariño</p>
            <div class="cta-buttons">
                <a href="/pages/afiliacion.php" class="btn btn-primary">Afiliar mi Club</a>
                <a href="/pages/contacto.php" class="btn btn-secondary">Contáctanos</a>
            </div>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="latest-news">
    <div class="container">
        <div class="section-header center">
            <span class="section-subtitle">MANTENTE INFORMADO</span>
            <h2 class="section-title">Últimas Noticias</h2>
        </div>

        <div class="news-grid">
            <article class="news-card">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=400&h=300&fit=crop" alt="Noticia" loading="lazy">
                    <div class="news-date">15 ENE</div>
                </div>
                <div class="news-content">
                    <h3>Inicio del Torneo de Liga 2025</h3>
                    <p>Se acerca el inicio del torneo departamental más importante del año. Conoce las fechas y equipos participantes.</p>
                    <a href="/pages/noticias.php" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?w=400&h=300&fit=crop" alt="Noticia" loading="lazy">
                    <div class="news-date">10 ENE</div>
                </div>
                <div class="news-content">
                    <h3>Selección Sub-17 clasificó a nacional</h3>
                    <p>Nuestros jóvenes talentos lograron clasificar al torneo nacional representando a Nariño.</p>
                    <a href="/pages/noticias.php" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1589487391730-58f20eb2c308?w=400&h=300&fit=crop" alt="Noticia" loading="lazy">
                    <div class="news-date">05 ENE</div>
                </div>
                <div class="news-content">
                    <h3>Nuevos cursos de entrenadores</h3>
                    <p>Abrimos inscripciones para Licencias C de la Federación Colombiana de Fútbol.</p>
                    <a href="/pages/noticias.php" class="news-link">Leer más <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="/pages/noticias.php" class="btn btn-primary">Ver Todas las Noticias</a>
        </div>
    </div>
</section>

<style>
/* Estilos adicionales para la página de inicio */
.quick-intro {
    padding: var(--spacing-xl) 0;
    background: var(--white);
}

.intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.intro-text {
    font-size: 1.125rem;
    line-height: 1.8;
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.intro-image {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.intro-image img {
    width: 100%;
    height: 600px;
    object-fit: cover;
}

.services-preview {
    padding: var(--spacing-xl) 0;
    background: var(--light);
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-top: 1rem;
    transition: var(--transition-base);
}

.service-link:hover {
    gap: 1rem;
}

.tournaments-highlight {
    padding: var(--spacing-xl) 0;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: var(--white);
}

.tournaments-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.tournament-item {
    background: rgba(255, 255, 255, 0.1);
    padding: 2.5rem;
    border-radius: var(--radius-lg);
    backdrop-filter: blur(10px);
    text-align: center;
    position: relative;
}

.tournament-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--secondary-color);
    color: var(--dark);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
}

.tournament-item h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.tournament-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    margin: 1.5rem 0;
    font-size: 0.9375rem;
}

.cta-section {
    padding: var(--spacing-xl) 0;
    background: var(--dark);
    color: var(--white);
    text-align: center;
}

.cta-content h2 {
    font-size: clamp(2rem, 5vw, 3rem);
    color: var(--white);
    margin-bottom: 1rem;
}

.cta-content p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 700px;
    margin: 0 auto 2rem;
}

.cta-buttons {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

.latest-news {
    padding: var(--spacing-xl) 0;
    background: var(--white);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
}

.news-card {
    background: var(--light);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: var(--transition-base);
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.news-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition-slow);
}

.news-card:hover .news-image img {
    transform: scale(1.1);
}

.news-date {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--primary-color);
    color: var(--white);
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    font-weight: 700;
    font-size: 0.875rem;
    text-transform: uppercase;
}

.news-content {
    padding: 1.5rem;
}

.news-content h3 {
    font-size: 1.25rem;
    color: var(--dark);
    margin-bottom: 0.75rem;
}

.news-content p {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.news-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    transition: var(--transition-base);
}

.news-link:hover {
    gap: 1rem;
}

.text-center {
    text-align: center;
}

@media (max-width: 768px) {
    .intro-grid {
        grid-template-columns: 1fr;
    }

    .intro-image img {
        height: 400px;
    }

    .tournaments-slider {
        grid-template-columns: 1fr;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: stretch;
    }
}
</style>

<?php include 'includes/footer.php'; ?>