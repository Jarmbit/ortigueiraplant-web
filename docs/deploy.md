# Deploy: GitHub → cPanel

## Configuración Git Version Control en cPanel

1. cPanel → Files → **Git™ Version Control**
2. Crear nuevo repo con:
   - **Repository Path:** `/home/solmadei/public_html/ortigueiraplant.com`
   - **Repository Name:** `ortigueiraplant-web`
   - **Clone URL:** `https://github.com/Jarmbit/ortigueiraplant-web.git`
3. En GitHub → Settings → Webhooks → añadir webhook de cPanel para deploy automático

## Deploy manual

```bash
# En cPanel Terminal o SSH (puerto 1020)
cd /home/solmadei/public_html/ortigueiraplant.com
git pull origin main
```

## Lo que está versionado

Solo código personalizado. WordPress core, plugins de terceros y uploads NO están en git.
