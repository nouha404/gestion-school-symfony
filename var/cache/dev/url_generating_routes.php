<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_classe' => [[], ['_controller' => 'App\\Controller\\ClasseController::index'], [], [['text', '/classe']], [], [], []],
    'app_professeur' => [[], ['_controller' => 'App\\Controller\\ProfesseurController::index'], [], [['text', '/professeur']], [], [], []],
];
