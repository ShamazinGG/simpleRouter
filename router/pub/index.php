<?php

echo "Hello";

$uri = $_SERVER['REQUEST_URI'];

if ('/' === $uri) {
    echo "Главная страница";
}elseif ('/about === $uri) {
    echo "Страница создания пользователей";
}