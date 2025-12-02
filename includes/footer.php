    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="/assets/images/logo.webp" alt="Liga de Fútbol de Nariño" class="footer-logo-img">
                    </div>
                    <p>Ente rector del fútbol aficionado en Nariño. Promoviendo formación, inclusión y desarrollo social a través del deporte.</p>
                    <div class="footer-social">
                        <a href="https://facebook.com/ligafutbolnarino" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/ligafutbolnarino" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/ligafutbolnarino" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://youtube.com/@ligafutbolnarino" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Institucional</h4>
                    <ul>
                        <li><a href="/pages/nosotros.php">Nosotros</a></li>
                        <li><a href="/pages/nosotros.php#mision">Misión y Visión</a></li>
                        <li><a href="/pages/nosotros.php#valores">Valores</a></li>
                        <li><a href="/pages/noticias.php">Noticias</a></li>
                        <li><a href="/pages/transparencia.php">Transparencia</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="/pages/afiliacion.php">Afiliación de Clubes</a></li>
                        <li><a href="/pages/servicios.php#formacion">Formación y Capacitación</a></li>
                        <li><a href="/pages/torneos.php">Torneos Oficiales</a></li>
                        <li><a href="/pages/selecciones.php">Selecciones Nariño</a></li>
                        <li><a href="/pages/servicios.php#eventos">Eventos Especiales</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contacto</h4>
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Calle 18 No. 25-52<br>
                            <span style="padding-left: 24px;">Pasto, Nariño - Colombia</span>
                        </li>
                        <li><i class="fas fa-phone"></i> +57 (602) 123 4567</li>
                        <li><i class="fas fa-envelope"></i> contacto@ligadefutboldenarino.com</li>
                        <li><i class="fas fa-clock"></i> Lun - Vie: 8:00 AM - 5:00 PM</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Liga de Fútbol de Nariño. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="/pages/politica-privacidad.php">Política de Privacidad</a>
                    <a href="/pages/terminos.php">Términos y Condiciones</a>
                    <a href="/pages/pqrs.php">PQRS</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="scroll-top" aria-label="Volver arriba">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Scripts principales -->
    <script src="/assets/js/main.js"></script>

    <?php if(isset($additionalJS)): ?>
        <?php foreach($additionalJS as $js): ?>
            <script src="<?php echo $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if(isset($inlineJS)): ?>
        <script>
            <?php echo $inlineJS; ?>
        </script>
    <?php endif; ?>

</body>
</html>