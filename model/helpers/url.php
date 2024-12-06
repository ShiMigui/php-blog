<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']) . '/');
}

$pageName = basename($_SERVER['SCRIPT_NAME'], ".php");

if ($pageName === 'index') $pageName = 'Home';
else $pageName = ucfirst($pageName);
