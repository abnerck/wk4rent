<?php

// Incluir el archivo autoload de Composer
require __DIR__ . '/../vendor/autoload.php';

// Importar el SDK de MercadoPago
use MercadoPago\SDK;

// Prueba para verificar si la clase SDK se está cargando correctamente
if (class_exists('MercadoPago\SDK')) {
    echo "Mercado Pago SDK cargado exitosamente.<br>";
} else {
    echo "Error: Mercado Pago SDK no encontrado.";
    exit;
}

// Configurar la clave de acceso de Mercado Pago
SDK::setAccessToken('TEST-2221383748999612-111815-1d20bf7cec550a1fa34354c6d415f622-386056396');

// El resto del código para el pago con MercadoPago...

?>
