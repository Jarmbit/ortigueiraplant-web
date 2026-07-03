# OrtigueiraPlant.com — WordPress Source

Repositorio del código personalizado de [ortigueiraplant.com](https://www.ortigueiraplant.com) — vivero de camelias en Santa Cruz de Rivadulla (Galicia).

## Estructura

```
wp-content/
  mu-plugins/
    ortigueira-improvements.php   # Botón WhatsApp, HTTPS fixes, mejoras generales
  themes/
    strata/                       # Tema activo (Qode Strata)
wp-config-sample.php              # Plantilla de configuración (sin credenciales)
```

## WordPress

- **Versión:** 7.0
- **PHP:** 7.4
- **Hosting:** Sered (cPanel) — host.cpse37.eu

## Plugins activos

| Plugin | Función |
|---|---|
| Contact Form 7 | Formularios de contacto |
| WooCommerce | Catálogo de productos (mayoristas) |
| WPML | Multiidioma (ES/EN pendiente) |
| TablePress | Tablas de variedades |
| Litespeed Cache | Caché y rendimiento |
| Akismet | Anti-spam |

## Deploy

Ver [docs/deploy.md](docs/deploy.md) para instrucciones de deploy via cPanel Git Version Control.

## Mejoras pendientes

- [ ] Catálogo de variedades de camelia (página Ventas)
- [ ] Versión en inglés (WPML ya instalado)
- [ ] Galería reorganizada con fotos del jardín histórico
- [ ] Página "El Jardín" — historia del Pazo siglo XVI
