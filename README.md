# Shop PHP — laboratorio de Centinela

Repositorio de demostración con vulnerabilidades **intencionales**. Sirve para probar la conexión de un repositorio GitHub, el análisis inicial y la revisión de cambios con el SDK. No lo despliegues como una tienda pública.

El código de ejemplo incluye una búsqueda con SQL injection, una vista con XSS reflejado y una exportación que construye un comando de shell con datos del usuario. El `Dockerfile` y `composer.json` conservan las versiones del fixture original para mostrar hallazgos de runtime y dependencias.

Para la demo, conectá este repositorio desde **Centinela → Repositorios → Conectar repositorio** y seleccioná GitHub. Después corregí uno de los archivos y ejecutá `centinela review --diff` desde este checkout para mostrar el flujo de corrección.
