<?php

return [
    'paths' => ['*'], // ← en dev: aplica CORS a todas las rutas
    // Si prefieres granular: ['api/*','sanctum/csrf-cookie','login','logout','register']
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // ← cookies con Sanctum
];
