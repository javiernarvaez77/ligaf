# Liga de Fútbol de Nariño - Sitio Web Oficial

## 🎉 Sitio Web Multipágina con Header y Footer Maestros

### 📋 Resumen del Proyecto

Este es un sitio web profesional multipágina para la Liga de Fútbol de Nariño, construido con:
- **PHP** para includes maestros (header y footer)
- **HTML5** semántico
- **CSS3** con los colores oficiales de la liga
- **JavaScript** vanilla para interactividad
- **Diseño 100% responsive**

---

## 🎨 Colores Oficiales

```css
--primary-color: #503AA8;      /* Morado principal */
--primary-dark: #3d2d80;       /* Morado oscuro */
--secondary-color: #FFEE58;    /* Amarillo */
--accent-pink: #F6CFF4;        /* Rosa */
--accent-gray: #686868;        /* Gris */
--accent-cream: #FBFAF3;       /* Crema */
```

**Tipografía Oficial:**
- Manrope (principal)
- Fira Code (monospace)

---

## 📁 Estructura del Proyecto

```
ligaf/
├── index.php                    # Página de inicio
├── includes/
│   ├── header.php              # ⭐ Header maestro
│   └── footer.php              # ⭐ Footer maestro
├── pages/
│   ├── nosotros.php            # Página Nosotros
│   ├── servicios.php           # Página Servicios
│   ├── torneos.php             # Página Torneos
│   ├── selecciones.php         # Página Selecciones
│   ├── contacto.php            # Página Contacto
│   ├── afiliacion.php          # Página Afiliación
│   └── noticias.php            # Página Noticias
├── assets/
│   ├── css/
│   │   ├── styles.css          # Estilos principales
│   │   └── pages.css           # Estilos de páginas internas
│   ├── js/
│   │   └── main.js             # JavaScript principal
│   └── images/
│       └── logo.png            # Logo oficial
├── manifest.json
├── sitemap.xml
└── robots.txt
```

---

## 🚀 Cómo Funciona el Sistema de Includes

### Header y Footer Maestros

**VENTAJA PRINCIPAL:** Solo necesitas modificar un archivo para cambiar el header o footer en TODAS las páginas.

### Estructura de una Página:

```php
<?php
$pageTitle = "Nombre de la Página";
$bodyClass = "pagina-clase";
include '../includes/header.php';  // Para páginas en /pages/
// include 'includes/header.php';   // Para index.php
?>

<!-- Contenido de tu página aquí -->

<?php include '../includes/footer.php'; ?>
```

### Agregar un Nuevo Botón al Menú:

1. Abre `/includes/header.php`
2. Encuentra la sección `<ul class="nav-menu">`
3. Agrega una nueva línea:

```php
<li><a href="/pages/tu-nueva-pagina.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'tu-nueva-pagina.php') ? 'active' : ''; ?>">Nuevo Botón</a></li>
```

¡Listo! El botón aparecerá en TODAS las páginas automáticamente.

---

## 🌐 Acceder al Sitio

### En XAMPP (Local):

```
http://localhost/ligaf/
```

### Páginas Disponibles:

- `http://localhost/ligaf/` - Inicio
- `http://localhost/ligaf/pages/nosotros.php` - Nosotros
- `http://localhost/ligaf/pages/servicios.php` - Servicios
- `http://localhost/ligaf/pages/torneos.php` - Torneos
- `http://localhost/ligaf/pages/selecciones.php` - Selecciones
- `http://localhost/ligaf/pages/contacto.php` - Contacto
- `http://localhost/ligaf/pages/afiliacion.php` - Afiliación
- `http://localhost/ligaf/pages/noticias.php` - Noticias

---

## 📝 Crear una Nueva Página

### Paso 1: Crear el Archivo PHP

Crea un nuevo archivo en `/pages/mi-nueva-pagina.php`:

```php
<?php
$pageTitle = "Mi Nueva Página";
$bodyClass = "mi-nueva-pagina";
include '../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1 class="page-title">Mi Nueva Página</h1>
        <p class="page-subtitle">Descripción de la página</p>
    </div>
</section>

<section class="contenido">
    <div class="container">
        <h2>Contenido Principal</h2>
        <p>Aquí va tu contenido...</p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

### Paso 2: Agregar al Menú

Edita `/includes/header.php` y agrega:

```php
<li><a href="/pages/mi-nueva-pagina.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'mi-nueva-pagina.php') ? 'active' : ''; ?>">Mi Página</a></li>
```

### Paso 3: ¡Listo!

Accede a `http://localhost/ligaf/pages/mi-nueva-pagina.php`

---

## 🎨 Personalización

### Cambiar Colores Globales

Edita `/assets/css/styles.css` línea 10:

```css
:root {
    --primary-color: #TU_COLOR;
    --secondary-color: #TU_COLOR;
}
```

Los cambios se aplicarán automáticamente en TODAS las páginas.

### Cambiar Logo

1. Coloca tu logo en `/assets/images/logo.png`
2. El header maestro lo mostrará automáticamente en todas las páginas

### Modificar el Footer

Edita `/includes/footer.php` una sola vez y los cambios se reflejarán en todo el sitio.

---

## 📧 Configurar Formulario de Contacto

El formulario en `/pages/contacto.php` está listo. Para hacerlo funcional:

### Opción 1: Usar contact.php

1. Crea `/contact.php` o usa el ejemplo `contact.php.example`
2. Configura tu email en la línea indicada
3. El formulario enviará emails automáticamente

### Opción 2: Servicio Externo (EmailJS, Formspree)

Sigue las instrucciones del servicio elegido e integra en `/assets/js/main.js`

---

## 🔧 Agregar CSS Adicional a una Página

Si una página necesita estilos específicos:

```php
<?php
$pageTitle = "Mi Página";
$additionalCSS = ['/assets/css/mi-estilos.css'];
include '../includes/header.php';
?>
```

El header incluirá automáticamente ese CSS solo en esa página.

---

## 📱 Sistema de Navegación Activa

El header maestro marca automáticamente la página actual en el menú.

**No necesitas hacer nada**, el sistema detecta en qué página estás y aplica la clase `active`.

---

## 🌟 Ventajas del Sistema Actual

### ✅ Header y Footer Maestros
- Cambias un archivo y se actualiza en TODAS las páginas
- No más copiar y pegar código
- Mantenimiento súper fácil

### ✅ Navegación Multipágina
- Cada sección tiene su propia URL
- Mejor para SEO
- Navegación más rápida
- URLs compartibles

### ✅ Sistema Modular
- Fácil agregar nuevas páginas
- CSS organizado por secciones
- JavaScript centralizado

### ✅ Colores Oficiales
- Paleta de colores del sitio real
- Logo preparado para ser integrado
- Tipografía oficial (Manrope)

---

## 📊 Páginas Creadas

### ✅ Páginas Completas:

1. **index.php** - Página de inicio con hero, servicios preview, torneos y noticias
2. **nosotros.php** - Identidad, misión, visión, valores, historia y equipo directivo
3. **servicios.php** - Todos los servicios detallados con información completa
4. **torneos.php** - Información detallada de cada torneo oficial
5. **contacto.php** - Formulario de contacto con mapa y datos de contacto

### 🔨 Páginas por Completar:

- **selecciones.php** - Información de selecciones por categoría
- **afiliacion.php** - Proceso de afiliación de clubes
- **noticias.php** - Blog/noticias de la liga

---

## 🚀 Subir a Producción

### Antes de Subir:

1. ✅ Agregar logo real en `/assets/images/logo.png`
2. ✅ Cambiar URLs en `header.php` de localhost a tu dominio
3. ✅ Actualizar información de contacto real
4. ✅ Configurar formulario de contacto
5. ✅ Agregar enlaces reales de redes sociales en footer
6. ✅ Reemplazar imágenes de placeholder con fotos reales
7. ✅ Configurar SSL (HTTPS)

### Subir Archivos:

1. Sube TODOS los archivos vía FTP/cPanel
2. Asegúrate de mantener la estructura de carpetas
3. Verifica que PHP esté habilitado en tu hosting
4. Prueba todas las páginas después de subir

---

## 🛠️ Solución de Problemas

### "Las páginas no cargan"
- Verifica que Apache esté corriendo
- Asegúrate de que PHP esté habilitado
- Revisa que las rutas en include sean correctas

### "El header/footer no se ve"
- Verifica la ruta del include (../ para páginas en /pages/)
- Asegúrate de que los archivos existan

### "Los estilos no se aplican"
- Verifica que `/assets/css/styles.css` y `pages.css` existan
- Revisa que las rutas CSS en header sean correctas

### "El menú no marca la página activa"
- Verifica que el nombre del archivo PHP coincida con el código en header.php

---

## 📞 Estructura del Header Maestro

```php
<!-- Detección automática de página activa -->
<li><a href="/pages/nosotros.php"
       class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'nosotros.php') ? 'active' : ''; ?>">
    Nosotros
</a></li>
```

El `basename($_SERVER['PHP_SELF'])` detecta el nombre del archivo actual.

---

## 🎯 Próximos Pasos

1. **Agregar Logo Real**
   - Diseña o usa el logo oficial
   - Guárdalo en `/assets/images/logo.png`

2. **Completar Páginas Faltantes**
   - Crear contenido para Selecciones
   - Crear contenido para Afiliación
   - Crear contenido para Noticias

3. **Contenido Real**
   - Reemplazar imágenes de placeholder
   - Actualizar todos los textos
   - Agregar fotos de eventos reales

4. **Configurar Funcionalidades**
   - Configurar formulario de contacto
   - Integrar redes sociales reales
   - Configurar Google Analytics

5. **SEO y Optimización**
   - Actualizar meta descriptions
   - Agregar alt text a imágenes
   - Optimizar velocidad de carga

---

## 💡 Tips Profesionales

### Agregar Secciones con Anclas

Para links a secciones específicas:

```php
<li><a href="/pages/servicios.php#formacion">Formación</a></li>
```

Y en la página:
```html
<section id="formacion">
```

### Variables PHP Útiles

```php
$pageTitle = "Título";              // Título de la página
$bodyClass = "clase-body";          // Clase CSS del body
$additionalCSS = ['archivo.css'];   // CSS adicional
$additionalJS = ['archivo.js'];     // JS adicional
```

---

## 📋 Checklist Pre-Lanzamiento

- [ ] Logo oficial agregado
- [ ] Todas las URLs actualizadas al dominio real
- [ ] Información de contacto real
- [ ] Formulario de contacto configurado
- [ ] Redes sociales con enlaces reales
- [ ] Imágenes reales (no placeholders)
- [ ] Todas las páginas probadas
- [ ] Responsive verificado en móvil
- [ ] SSL/HTTPS configurado
- [ ] Google Analytics instalado
- [ ] Sitemap.xml actualizado
- [ ] Robots.txt verificado

---

## 🎉 ¡Listo!

Tu sitio web multipágina con header y footer maestros está funcionando.

**Dominio:** https://ligadefutboldenarino.com

**Próxima actualización:** Solo edita `/includes/header.php` o `/includes/footer.php` y los cambios se aplicarán en TODO el sitio.

---

*Desarrollado para la Liga de Fútbol de Nariño*
*Enero 2025*