<?php
require_once dirname(__DIR__) . '/config/init.php';
new \open_cms\App();
throw new Exception('Страница не найдена', 404);