<?php
define('LARAVEL_PUBLIC_DIR', __DIR__.'/..');
// ...
if ($uri !== '/' && file_exists(LARAVEL_PUBLIC_DIR.$uri)) {
    return false;
}
require_once LARAVEL_PUBLIC_DIR.'/index.php';
