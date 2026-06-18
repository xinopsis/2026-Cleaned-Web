<?php
/**
 * Rutas raíz del sitio (funcionan con URLs limpias tipo /blog/slug/).
 */

function site_base_href(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }

    $appRoot = realpath(dirname(__DIR__));
    $docRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');

    if ($appRoot && $docRoot) {
        $app = str_replace('\\', '/', $appRoot);
        $doc = rtrim(str_replace('\\', '/', $docRoot), '/');
        if (strpos($app, $doc) === 0) {
            $rel = trim(substr($app, strlen($doc)), '/');
            $base = $rel === '' ? '/' : '/' . $rel . '/';
        } else {
            $base = '/';
        }
    } else {
        $base = '/';
    }

    return $base;
}

function site_asset_href(string $path): string
{
    return site_base_href() . ltrim($path, '/');
}
