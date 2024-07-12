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

// Generar XML
$sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$sitemap .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

foreach ($urls as $url) {
    $sitemap .= "  <url>\n";
    $sitemap .= "    <loc>" . $base_url . $url . "</loc>\n";
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
    $sitemap .= "    <changefreq>weekly</changefreq>\n";
    $sitemap .= "    <priority>0.8</priority>\n";
    $sitemap .= "  </url>\n";
}

$sitemap .= "</urlset>";

// Guardar el XML en un archivo
file_put_contents("sitemap.xml", $sitemap);

// Mostrar el XML
header("Content-type: text/xml");
echo $sitemap;
?>
