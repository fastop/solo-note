<?php

/**
 * Configuración de Turso
 * Guarda tus credenciales aquí
 */

// Obtén estos valores de Turso:
// URL: turso db show mi-blog
// TOKEN: turso db tokens create mi-blog

define('TURSO_URL', 'https://mi-blog-usuario.turso.io');  // Reemplaza con tu URL
define('TURSO_TOKEN', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...');  // Reemplaza con tu token

// Configuraciones opcionales
define('TURSO_TIMEOUT', 30);  // Timeout en segundos
