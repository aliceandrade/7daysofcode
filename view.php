<?php

$views = [
    '/view/register.view',
    '/view/login.view',
    '/view/not_found.view'
];

foreach ($views as $view) {
    $content = file_get_contents($view);
    echo $content;
 }