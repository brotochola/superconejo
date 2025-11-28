# Checklist de Verificación - SuperConejo GitHub Pages

## ✅ Archivos Eliminados

- [x] index.php
- [x] queEs.php
- [x] institucionales.php
- [x] homenajes.php
- [x] videojuegos.php
- [x] contacto.php
- [x] Mobile_Detect.php
- [x] mandar_mail.php
- [x] formmail.php
- [x] fb y youtube.php
- [x] localization/localization.php

## ✅ SEO Mejorado

### Meta Tags

- [x] `lang="es"` en `<html>`
- [x] Meta charset UTF-8
- [x] Meta description optimizada
- [x] Meta keywords relevantes
- [x] Canonical URL
- [x] Meta robots (index, follow)

### Open Graph / Facebook

- [x] og:type="website"
- [x] og:url con HTTPS
- [x] og:title optimizado
- [x] og:description
- [x] og:image
- [x] og:site_name
- [x] og:locale="es_AR"

### Twitter Cards

- [x] twitter:card
- [x] twitter:site
- [x] twitter:title
- [x] twitter:description
- [x] twitter:image

### Structured Data (Schema.org)

- [x] Organization schema con JSON-LD
- [x] Información de contacto
- [x] Redes sociales
- [x] Descripción de servicios

### Archivos SEO

- [x] robots.txt actualizado
- [x] sitemap.xml actualizado con URLs correctas
- [x] Canonical URLs

## ✅ Accesibilidad Mejorada

### Navegación

- [x] Skip to main content link
- [x] `role="navigation"` en nav
- [x] `aria-label` en navegación principal
- [x] `role="menubar"` y `role="menuitem"`
- [x] `role="button"` en botones de idioma
- [x] `aria-label` descriptivos en enlaces
- [x] Menú móvil con `aria-expanded`

### Multimedia

- [x] Alt text en logo mejorado
- [x] Popup video con `role="dialog"` y `aria-modal`
- [x] Botón cerrar con `aria-label`
- [x] Iframe con `title`

### Estructura

- [x] `<main>` para contenido principal
- [x] ID `main-content` para skip link
- [x] Semantic HTML (nav, header, main)

### Enlaces

- [x] Todos los enlaces con `onclick` + `return false`
- [x] Eliminado `href="javascript:..."`
- [x] Eliminado `target="_blank"` innecesario

## 📋 Verificaciones Pendientes

### Funcionalidad

- [ ] Probar cambio de idioma (ES/EN)
- [ ] Probar navegación entre secciones
- [ ] Probar apertura de videos
- [ ] Probar menú móvil
- [ ] Verificar carga de imágenes
- [ ] Verificar animaciones

### Responsive

- [ ] Probar en móvil
- [ ] Probar en tablet
- [ ] Probar en desktop
- [ ] Verificar slider móvil

### Navegadores

- [ ] Chrome
- [ ] Firefox
- [ ] Safari
- [ ] Edge
- [ ] Móviles

### Performance

- [ ] Velocidad de carga
- [ ] Optimización de imágenes
- [ ] Carga lazy de secciones funciona

## 🔍 Tests de SEO Recomendados

1. **Google Search Console**

   - Subir sitemap.xml
   - Verificar indexación
   - Revisar errores de rastreo

2. **Google PageSpeed Insights**

   - https://pagespeed.web.dev/

3. **Lighthouse Audit**

   - Abrir DevTools > Lighthouse
   - Verificar puntuación de:
     - Performance
     - Accessibility
     - Best Practices
     - SEO

4. **Structured Data Testing Tool**

   - https://validator.schema.org/
   - Verificar Organization schema

5. **Meta Tags Checker**
   - https://metatags.io/
   - Verificar preview de redes sociales

## 🎯 Próximos Pasos

1. Subir a GitHub
2. Configurar GitHub Pages
3. Verificar en dominio www.superconejo.com.ar
4. Enviar sitemap a Google Search Console
5. Monitorear analytics

## 📝 Notas

- El formulario de contacto está deshabilitado (solo muestra redes sociales)
- Para reactivarlo, usar servicios como Formspree o EmailJS
- Todos los archivos PHP han sido eliminados
- El sitio ahora es 100% estático (HTML/CSS/JS)
