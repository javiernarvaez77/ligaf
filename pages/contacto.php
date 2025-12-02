<?php
$pageTitle = "Contacto";
$bodyClass = "contacto-page";
include '../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Contáctanos</h1>
        <p class="page-subtitle">Estamos para atenderte y resolver todas tus dudas</p>
    </div>
</section>

<section class="contact-main">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info-section">
                <h2>Información de Contacto</h2>
                <p class="mb-4">Ponte en contacto con nosotros a través de cualquiera de nuestros canales de atención.</p>

                <div class="info-item-large">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4>Dirección</h4>
                        <p>Calle 18 No. 25-52<br>Pasto, Nariño - Colombia</p>
                    </div>
                </div>

                <div class="info-item-large">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4>Teléfono</h4>
                        <p>+57 (602) 123 4567<br>+57 321 456 7890</p>
                    </div>
                </div>

                <div class="info-item-large">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4>Email</h4>
                        <p>contacto@ligadefutboldenarino.com<br>info@ligadefutboldenarino.com</p>
                    </div>
                </div>

                <div class="info-item-large">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4>Horario de Atención</h4>
                        <p>Lunes a Viernes: 8:00 AM - 5:00 PM<br>Sábados: 9:00 AM - 1:00 PM</p>
                    </div>
                </div>

                <div class="social-links-large">
                    <h4>Síguenos en Redes Sociales</h4>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form-section">
                <h2>Envíanos un Mensaje</h2>
                <p class="mb-4">Completa el formulario y nos pondremos en contacto contigo lo antes posible.</p>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo *</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono">Teléfono *</label>
                            <input type="tel" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto *</label>
                            <select id="asunto" name="asunto" required>
                                <option value="">Selecciona un tema</option>
                                <option value="afiliacion">Afiliación de Club</option>
                                <option value="torneos">Información sobre Torneos</option>
                                <option value="selecciones">Selecciones Nariño</option>
                                <option value="capacitacion">Formación y Capacitación</option>
                                <option value="patrocinio">Patrocinio</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Enviar Mensaje
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2 class="text-center mb-4">Encuéntranos</h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8736!2d-77.281!3d1.214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTInNTAuNCJOIDc3wrAxNic1Mi44Ilc!5e0!3m2!1ses!2sco!4v1234567890123!5m2!1ses!2sco"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>