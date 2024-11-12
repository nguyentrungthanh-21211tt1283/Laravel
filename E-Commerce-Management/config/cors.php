<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000'], // Địa chỉ frontend của bạn
    'allowed_headers' => ['*'],
    'exposed_headers' => false,
    'max_age' => 0,
    'supports_credentials' => true, // Quan trọng
];