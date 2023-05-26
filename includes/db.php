<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$connector = new mysqli($_ENV['SERVER_NAME'], $_ENV['USER_NAME'], $_ENV['PASSWORD'], $_ENV['DB_NAME']);

