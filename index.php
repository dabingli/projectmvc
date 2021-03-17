<?php
define('BASEDIR', __DIR__);
require BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::AutoLoader');

\IMooc\Application::getInstance(BASEDIR)->dispatch();