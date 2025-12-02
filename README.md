# Liga de Fútbol de Nariño - Sitio Web Oficial

Sitio web moderno, responsive y optimizado para SEO de la Liga de Fútbol de Nariño.

## 🚀 Características

### ✨ Diseño y UX
- **Diseño moderno y profesional** inspirado en las mejores prácticas de UI/UX
- **Completamente responsive** - Optimizado para móvil, tablet y escritorio
- **Animaciones suaves** con Intersection Observer API
- **Transiciones fluidas** y efectos hover interactivos
- **Navegación intuitiva** con scroll suave y menú móvil
- **Colores institucionales** que reflejan la identidad de la liga

### 🎯 SEO Optimizado
- **Meta tags completos** (description, keywords, author)
- **Open Graph tags** para redes sociales
- **Estructura semántica HTML5**
- **URLs amigables** con anclas descriptivas
- **Alt text en imágenes** para accesibilidad
- **Schema markup ready** (fácil de implementar)
- **Performance optimizado** con lazy loading

### ⚡ Rendimiento
- **Lazy loading** de imágenes
- **CSS optimizado** con variables CSS
- **JavaScript modular** y eficiente
- **Animaciones con GPU** (transform, opacity)
- **Debounce** en eventos de scroll
- **Intersection Observer** para animaciones bajo demanda

### 📱 Responsive Design
- **Mobile First** approach
- **Breakpoints**: 480px, 768px, 1024px
- **Menú hamburguesa** para móviles
- **Grids flexibles** que se adaptan a cualquier pantalla
- **Imágenes responsive** con object-fit

### ♿ Accesibilidad
- **Navegación por teclado**
- **Contraste de colores** WCAG AA
- **Focus trapping** en menú móvil
- **Aria labels** implementables
- **Estructura semántica**

## 📂 Estructura de Archivos

```
ligaf/
│
├── index.html          # Página principal
├── styles.css          # Estilos CSS
├── script.js           # JavaScript interactivo
└── README.md           # Documentación
```

## 🎨 Secciones del Sitio

1. **Hero Section**
   - Título impactante con estadísticas animadas
   - Botones de llamado a la acción
   - Parallax effect en el fondo

2. **Nosotros**
   - Identidad institucional
   - Misión y visión
   - Valores institucionales
   - Galería de imágenes

3. **Servicios**
   - 6 servicios principales con iconos
   - Cards interactivos con hover effects
   - Listas detalladas de beneficios

4. **Por Qué Elegirnos**
   - Features destacados
   - Video modal integrado
   - Diseño en dos columnas

5. **Torneos**
   - Grid de torneos oficiales
   - Badges y metadatos
   - Imágenes con overlay

6. **Impacto Territorial**
   - Estadísticas animadas con counters
   - Parallax background
   - Modalidades deportivas

7. **Aliados**
   - Partners institucionales
   - Información de patrocinios
   - Beneficios destacados

8. **Redes Sociales**
   - Feed de Instagram simulado
   - Estadísticas de alcance
   - Botones sociales

9. **Contacto**
   - Formulario funcional con validación
   - Información de contacto
   - Notificaciones toast

10. **Footer**
    - Links organizados
    - Redes sociales
    - Copyright

## 🛠️ Tecnologías Utilizadas

- **HTML5** - Estructura semántica
- **CSS3** - Variables CSS, Grid, Flexbox, Animaciones
- **JavaScript ES6+** - Vanilla JS, sin dependencias
- **Font Awesome 6.4** - Iconografía
- **Google Fonts** - Montserrat & Roboto
- **Unsplash** - Imágenes de placeholder

## 🚀 Instalación y Uso

### Opción 1: XAMPP (Local)

1. Copia la carpeta `ligaf` a `C:\xampp\htdocs\`
2. Inicia XAMPP y activa Apache
3. Abre tu navegador y ve a: `http://localhost/ligaf/`

### Opción 2: Servidor Web

1. Sube todos los archivos a tu hosting
2. Asegúrate de que `index.html` esté en la raíz
3. Accede a tu dominio

### Opción 3: Live Server (VS Code)

1. Instala la extensión "Live Server" en VS Code
2. Click derecho en `index.html`
3. Selecciona "Open with Live Server"

## 🎨 Personalización

### Colores

Los colores principales se definen en las variables CSS en `styles.css`:

```css
:root {
    --primary-color: #e63946;      /* Rojo principal */
    --primary-dark: #c1121f;       /* Rojo oscuro */
    --secondary-color: #457b9d;    /* Azul */
    --accent-color: #f1faee;       /* Crema */
    --dark: #1d3557;               /* Azul oscuro */
}
```

### Tipografía

Cambiar las fuentes en las variables CSS:

```css
:root {
    --font-primary: 'Montserrat', sans-serif;
    --font-secondary: 'Roboto', sans-serif;
}
```

### Imágenes

Reemplaza las URLs de Unsplash con tus propias imágenes:

1. **Hero background**: `.hero` en CSS
2. **Galería About**: Sección `.about-images` en HTML
3. **Torneos**: `.tournament-image img` en HTML
4. **Impact background**: `.impact` en CSS

### Contenido

Todo el contenido está en español y organizado por secciones en `index.html`.

## 📧 Formulario de Contacto

El formulario actual usa JavaScript para validación y muestra notificaciones.

### Para conectar con backend:

1. **PHP** (ejemplo):

```javascript
// En script.js, reemplaza el setTimeout con:
fetch('contact.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(formData)
})
.then(response => response.json())
.then(data => {
    showNotification(data.message, 'success');
})
.catch(error => {
    showNotification('Error al enviar el mensaje', 'error');
});
```

2. **Servicio de Email** (EmailJS, Formspree, etc.)

## 🎥 Video Modal

Para cambiar el video de "Por Qué Elegirnos":

1. Abre `script.js`
2. Busca `videoUrls`
3. Reemplaza la URL con tu video de YouTube:

```javascript
const videoUrls = {
    about: 'https://www.youtube.com/embed/TU_VIDEO_ID?autoplay=1'
};
```

## 📱 Redes Sociales

Actualiza los enlaces de redes sociales en:

1. **Header CTA**: Botón "Afiliate Ahora"
2. **Hero buttons**: Enlaces de acción
3. **Social Media section**: Botones de Facebook e Instagram
4. **Footer**: Links en `.footer-social`

## 🔧 Optimizaciones Adicionales

### Performance

1. **Minificar CSS y JS** para producción:
   - Usa herramientas como `cssnano` y `terser`

2. **Comprimir imágenes**:
   - Usa WebP format
   - Implementa responsive images con `srcset`

3. **CDN**:
   - Sube assets estáticos a un CDN

### SEO Avanzado

1. **Sitemap.xml**:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://ligafutbolnarino.com/</loc>
    <priority>1.0</priority>
  </url>
</urlset>
```

2. **Robots.txt**:
```
User-agent: *
Allow: /
Sitemap: https://ligafutbolnarino.com/sitemap.xml
```

3. **Google Analytics**:
   - Descomenta el código de tracking en `script.js`
   - Agrega tu ID de Google Analytics

## 📊 Analytics

Para activar el tracking de eventos:

1. Agrega Google Analytics o similar
2. Descomenta las funciones de tracking en `script.js`
3. Los eventos ya están configurados para:
   - Clicks en botones
   - Clicks en redes sociales
   - Envío de formularios

## 🌐 Navegadores Soportados

- ✅ Chrome (últimas 2 versiones)
- ✅ Firefox (últimas 2 versiones)
- ✅ Safari (últimas 2 versiones)
- ✅ Edge (últimas 2 versiones)
- ✅ Opera (últimas 2 versiones)
- ⚠️ IE11 (requiere polyfills)

## 📝 Checklist Pre-Lanzamiento

- [ ] Reemplazar todas las imágenes de placeholder
- [ ] Actualizar información de contacto (teléfono, email, dirección)
- [ ] Conectar formulario con backend o servicio de email
- [ ] Agregar enlaces reales de redes sociales
- [ ] Configurar Google Analytics
- [ ] Configurar Search Console
- [ ] Agregar favicon
- [ ] Probar en múltiples dispositivos
- [ ] Validar HTML (W3C Validator)
- [ ] Optimizar imágenes
- [ ] Configurar SSL (HTTPS)
- [ ] Crear sitemap.xml
- [ ] Configurar robots.txt
- [ ] Realizar pruebas de velocidad (PageSpeed Insights)

## 🐛 Solución de Problemas

### El menú móvil no funciona
- Verifica que `script.js` esté cargado correctamente
- Revisa la consola del navegador para errores

### Las animaciones no se ejecutan
- Asegúrate de que JavaScript está habilitado
- Verifica compatibilidad con Intersection Observer

### Las imágenes no cargan
- Verifica las URLs de las imágenes
- Asegúrate de tener conexión a internet (si usas imágenes externas)

### El formulario no envía
- Configura el backend para procesar el formulario
- Revisa la validación en `script.js`

## 📞 Soporte

Para soporte o consultas sobre el sitio web:
- **Email**: desarrollo@ligafutbolnarino.com
- **Teléfono**: +57 (602) XXX XXXX

## 📄 Licencia

© 2025 Liga de Fútbol de Nariño. Todos los derechos reservados.

---

**Desarrollado con ❤️ para la Liga de Fútbol de Nariño**