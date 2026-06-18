<?php
/**
 * Inicializa SEO y metadatos de un artículo del blog desde articulos.xml.
 * Requiere: $articleSlug (string) definido antes del require.
 */
require_once __DIR__ . '/articulos.php';
require_once __DIR__ . '/site-path.php';

if (!isset($articleSlug) || $articleSlug === '') {
    http_response_code(500);
    exit('Artículo no configurado.');
}

$articuloXml = articulo_por_slug($articleSlug);

$pageTitle = 'Blog | Cleaned Services';
$pageDescription = 'Artículos y novedades de Cleaned Services sobre limpieza corporativa, facility management y gestión operativa.';
$articleMeta = [
    'title' => '',
    'category' => '',
    'date' => null,
    'dateDisplay' => '—',
    'image' => 'images/articles/' . $articleSlug . '.svg',
    'breadcrumbLabel' => '',
];

if ($articuloXml !== null) {
    $brandSuffix = ' | Cleaned Services';
    $metaTitle = $articuloXml['metaTitle'];
    $pageTitle = (strpos($metaTitle, 'Cleaned') !== false)
        ? $metaTitle
        : $metaTitle . $brandSuffix;
    $pageDescription = $articuloXml['metaDescription'];
    $articleMeta['title'] = $articuloXml['title'];
    $articleMeta['category'] = $articuloXml['category'];
    $articleMeta['date'] = $articuloXml['date'] ?: null;
    $articleMeta['image'] = $articuloXml['image'] ?: $articleMeta['image'];
    $articleMeta['breadcrumbLabel'] = $articuloXml['title'];
}

$articleMeta['dateDisplay'] = articulo_format_date_es($articleMeta['date']);
$pageImage = site_asset_href($articleMeta['image']);
$heroCoverCss = $pageImage;
