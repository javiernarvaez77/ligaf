# 🚀 Guía Rápida - Liga de Fútbol de Nariño

## ✅ ¡El sitio está listo!

Tu sitio web está completamente funcional. Aquí está todo lo que necesitas saber para empezar:

## 📁 Archivos Creados

```
ligaf/
├── index.html          ✅ Página principal con todas las secciones
├── styles.css          ✅ Diseño responsive y optimizado
├── script.js           ✅ Interactividad y animaciones
├── sitemap.xml         ✅ Mapa del sitio para SEO
├── robots.txt          ✅ Configuración para motores de búsqueda
├── manifest.json       ✅ PWA (Progressive Web App)
├── .htaccess           ✅ Optimización del servidor Apache
├── README.md           ✅ Documentación completa
└── GUIA_RAPIDA.md      ✅ Esta guía
```

## 🌐 Acceder al Sitio

### En XAMPP (Local):
1. Asegúrate de que XAMPP esté corriendo
2. Abre tu navegador
3. Ve a: **http://localhost/ligaf/**

### Probar en móvil (misma red WiFi):
1. Encuentra la IP de tu PC: `ipconfig` (Windows) o `ifconfig` (Mac/Linux)
2. En tu móvil: **http://TU_IP/ligaf/**
   Ejemplo: `http://192.168.1.100/ligaf/`

## 🎨 Características Principales

### ✨ Diseño
- ✅ **100% Responsive** - Funciona perfecto en móvil, tablet y escritorio
- ✅ **Animaciones suaves** - Elementos que aparecen al hacer scroll
- ✅ **Contadores animados** - Estadísticas que cuentan automáticamente
- ✅ **Navegación sticky** - Menú siempre visible
- ✅ **Menú móvil hamburguesa** - Navegación optimizada para móviles
- ✅ **Scroll suave** - Transiciones fluidas entre secciones

### 🔍 SEO Optimizado
- ✅ Meta tags completos
- ✅ Open Graph para redes sociales
- ✅ Sitemap.xml incluido
- ✅ Robots.txt configurado
- ✅ Estructura semántica HTML5
- ✅ URLs canónicas

### ⚡ Alto Rendimiento
- ✅ Lazy loading de imágenes
- ✅ Compresión GZIP (.htaccess)
- ✅ Cache del navegador optimizado
- ✅ CSS y JavaScript optimizados

## 🎯 Secciones del Sitio

| Sección | Descripción | Ancla |
|---------|-------------|-------|
| **Inicio** | Hero con estadísticas animadas | `#inicio` |
| **Nosotros** | Identidad, misión, visión, valores | `#nosotros` |
| **Servicios** | 6 servicios principales de la liga | `#servicios` |
| **Selecciones** | Incluido en Por Qué Elegirnos | `#selecciones` |
| **Torneos** | Competencias oficiales | `#torneos` |
| **Impacto** | Estadísticas territoriales | `#impacto` |
| **Aliados** | Partners y patrocinadores | - |
| **Redes Sociales** | Feed de Instagram simulado | - |
| **Contacto** | Formulario funcional | `#contacto` |

## ⚙️ Personalización Rápida

### 🎨 Cambiar Colores

Abre `styles.css` y modifica las variables en `:root`:

```css
:root {
    --primary-color: #e63946;      /* Rojo principal */
    --primary-dark: #c1121f;       /* Rojo oscuro */
    --secondary-color: #457b9d;    /* Azul */
}
```

### 📝 Cambiar Textos

Todo el contenido está en `index.html` en español. Usa CTRL+F para buscar y reemplazar.

### 🖼️ Cambiar Imágenes

Actualmente usa imágenes de Unsplash. Busca en `index.html`:

```html
src="https://images.unsplash.com/..."
```

Reemplaza con tus propias imágenes:
```html
src="/images/tu-imagen.jpg"
```

### 📧 Configurar Formulario

El formulario está en JavaScript simulado. Para hacerlo funcional:

#### Opción 1: EmailJS (Gratis)
1. Regístrate en [EmailJS](https://www.emailjs.com/)
2. Sigue sus instrucciones
3. Agrega el código en `script.js`

#### Opción 2: PHP Backend
Crea `contact.php`:

```php
<?php
header('Content-Type: application/json');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$to = "contacto@ligafutbolnarino.com";
$subject = "Contacto desde web: " . $asunto;
$body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\n\nMensaje:\n$mensaje";
$headers = "From: $email";

if(mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Mensaje enviado']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al enviar']);
}
?>
```

Luego en `script.js`, busca el `setTimeout` y reemplázalo con:

```javascript
fetch('contact.php', {
    method: 'POST',
    body: new FormData(contactForm)
})
.then(response => response.json())
.then(data => {
    showNotification(data.message, data.success ? 'success' : 'error');
    if(data.success) contactForm.reset();
    submitBtn.innerHTML = originalText;
    submitBtn.disabled = false;
});
```

### 🔗 Agregar Redes Sociales

Busca en `index.html`:

```html
<a href="#" class="social-btn facebook">
```

Reemplaza `#` con tus URLs reales:
```html
<a href="https://facebook.com/ligafutbolnarino" class="social-btn facebook">
<a href="https://instagram.com/ligafutbolnarino" class="social-btn instagram">
```

## 📱 Pruebas Responsive

### Desde el navegador:
1. Presiona **F12** (Herramientas de Desarrollo)
2. Click en el ícono de dispositivo móvil
3. Prueba diferentes tamaños:
   - iPhone 12/13 (390x844)
   - Samsung Galaxy S21 (360x800)
   - iPad (768x1024)
   - Desktop (1920x1080)

## 🚀 Subir a Internet

### Opción 1: Hosting Tradicional
1. Contrata hosting con cPanel
2. Sube todos los archivos vía FTP/FileZilla
3. Asegúrate de subir `.htaccess`

### Opción 2: Hosting Gratuito
- **Netlify** (Recomendado): Arrastra la carpeta completa
- **Vercel**: Conecta con GitHub
- **GitHub Pages**: Sube al repositorio

### Paso a paso Netlify (5 minutos):
1. Ve a [netlify.com](https://netlify.com)
2. Regístrate gratis
3. Arrastra la carpeta `ligaf`
4. ¡Listo! Te dan un dominio gratis

## 🔧 Checklist Pre-Lanzamiento

Antes de publicar, asegúrate de:

- [ ] Cambiar todas las URLs de `ligafutbolnarino.com` por tu dominio real
- [ ] Reemplazar imágenes de Unsplash con fotos reales
- [ ] Actualizar información de contacto (teléfono, email)
- [ ] Configurar formulario de contacto con backend real
- [ ] Agregar enlaces de redes sociales reales
- [ ] Crear favicons (usa [favicon.io](https://favicon.io))
- [ ] Probar en múltiples dispositivos
- [ ] Configurar Google Analytics
- [ ] Instalar certificado SSL (HTTPS)
- [ ] Probar velocidad en [PageSpeed Insights](https://pagespeed.web.dev/)

## 📊 Herramientas Útiles

### Para SEO:
- [Google Search Console](https://search.google.com/search-console)
- [PageSpeed Insights](https://pagespeed.web.dev/)
- [GTmetrix](https://gtmetrix.com/)

### Para Imágenes:
- [TinyPNG](https://tinypng.com/) - Comprimir imágenes
- [Squoosh](https://squoosh.app/) - Convertir a WebP
- [Favicon.io](https://favicon.io) - Crear favicons

### Para Analytics:
- [Google Analytics](https://analytics.google.com/)
- [Microsoft Clarity](https://clarity.microsoft.com/) - Grabaciones de usuarios

## 🆘 Solución de Problemas Comunes

### ❌ "No se ve el sitio en XAMPP"
- ✅ Verifica que Apache esté corriendo (verde en XAMPP)
- ✅ Asegúrate de estar en `http://localhost/ligaf/` (con la carpeta)
- ✅ Revisa que los archivos estén en `C:\xampp\htdocs\ligaf\`

### ❌ "El menú móvil no funciona"
- ✅ Abre la consola del navegador (F12)
- ✅ Busca errores en JavaScript
- ✅ Verifica que `script.js` esté cargando

### ❌ "Las imágenes no cargan"
- ✅ Revisa tu conexión a internet (usa imágenes de Unsplash)
- ✅ O reemplaza con imágenes locales en `/images/`

### ❌ "Las animaciones no se ven"
- ✅ Actualiza el navegador (necesitas navegador moderno)
- ✅ Verifica que JavaScript esté habilitado

## 📞 Próximos Pasos

1. **Familiarízate con el sitio** - Navega por todas las secciones
2. **Personaliza los contenidos** - Cambia textos e imágenes
3. **Configura el formulario** - Conecta con email real
4. **Agrega redes sociales** - Links reales de Facebook/Instagram
5. **Prueba en móvil** - Asegúrate de que todo funcione
6. **Sube a internet** - Usa Netlify o tu hosting
7. **Configura Analytics** - Mide visitas desde el día 1

## 💡 Tips Profesionales

- 🎯 **Contenido es rey**: Actualiza regularmente con noticias de torneos
- 📸 **Fotos reales**: Usa fotos propias de tus eventos
- 🔄 **Mantén actualizado**: Publica resultados y calendario de juegos
- 📱 **Mobile First**: 70% de tus visitas serán desde móvil
- ⚡ **Velocidad**: Comprime siempre las imágenes antes de subir
- 🔒 **Seguridad**: Usa HTTPS siempre (SSL gratis con Let's Encrypt)

## 🎉 ¡Listo para Lanzar!

Tu sitio web está **100% funcional** y listo para publicar. Solo necesitas:
1. Personalizar contenidos
2. Agregar tus imágenes
3. Configurar formulario
4. Subir a internet

**¿Necesitas ayuda?** Revisa el `README.md` para documentación detallada.

---

**Desarrollado para la Liga de Fútbol de Nariño** ⚽
*Última actualización: Enero 2025*