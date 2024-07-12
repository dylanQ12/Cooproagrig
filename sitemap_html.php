<?php
// Configuración
$base_url = "https://cooproagrig.org/"; // Reemplaza con la URL de tu sitio web

// Array de URLs del sitio
$urls = array(
    "/",
    "/contact.html",
    "/pages/about.html",
    "/pages/production.html",
    "/pages/training.html"
);

// Generar HTML
$sitemap = "<!DOCTYPE html>\n";
$sitemap .= "<html lang=\"es\">\n";
$sitemap .= "<head>\n";
$sitemap .= "  <meta charset=\"UTF-8\">\n";
$sitemap .= "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
$sitemap .= "  <title>Mapa del Sitio</title>\n";
$sitemap .= "</head>\n";
$sitemap .= "<body>\n";
$sitemap .= "  <h1>Mapa del Sitio</h1>\n";
$sitemap .= "  <ul>\n";

foreach ($urls as $url) {
    $sitemap .= "    <li><a href=\"" . $base_url . $url . "\">" . $base_url . $url . "</a></li>\n";
}

$sitemap .= "  </ul>\n";
$sitemap .= "</body>\n";
$sitemap .= "</html>";

// Guardar el HTML en un archivo
file_put_contents("sitemap.html", $sitemap);

// Mostrar el HTML
echo $sitemap;
?>

