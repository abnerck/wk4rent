<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Agregar Bootstrap desde un CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Car Rental || E-Learning HTML Template">

    <title>Car rental</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/user/wk.jpg">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/smoothScorllbar.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.date.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
    .car-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }
    .car-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        width: 300px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        background-color: #fff;
    }
    .car-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .car-info {
        padding: 15px;
    }
    .car-info h3 {
        font-size: 24px;
        margin: 10px 0;
        color: #000;
    }
    .car-info p {
        font-size: 16px;
        color: #000;
        margin: 5px 0;
    }
    .price {
        font-size: 20px;
        color: #e63946;
        font-weight: bold;
    }
    .reserve-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>


</head>

<body class="x-hidden">

    <header class="header my-40">
        <div class="container-fluid">
            <nav class="navigation d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo">
                    <img src="assets/media/user/kt.jpg" alt="/logo" class="header-logo" style="width: 200px;">
                </a>
                
                <style>
                    .logo h2 {
                        font-family: 'Haarlem Sans';
                        font-size: 50px; /* Ajusta el tamaño del texto */
                        font-weight: bold; /* Opcional, si deseas que el texto sea en negritas */
                        color: #333; /* Ajusta el color del texto */
                        margin: 0; /* Elimina márgenes adicionales */
                        padding: 0; /* Elimina rellenos adicionales */
                        text-transform: uppercase; /* Opcional, para poner todo en mayúsculas */
                    }
                </style>
    <div class="menu-button-right">
                    <div class="main-menu__nav">
                        <ul class="main-menu__list">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="javascript:void(0);">Rental</a>
                                <ul>
                                    <li><a href="rental.html">Rental</a></li>
                                    <li><a href="rental-sidebar.html">Rental sidebar</a></li>
                                    <li><a href="vehicle-details.html">Vehicle details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About us</a>
                            </li> 
                            <li>
                                <a href="contact.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="search-heart-icon d-md-flex d-none align-items-center gap-24">
                        <a href="book-now.html" class="cus-btn">
                            <span class="btn-text">
                                Book now
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M18.0098 6.62C17.9083 6.37565 17.7141 6.18147 17.4698 6.08C17.3496 6.02876 17.2205 6.00158 17.0898 6H7.08978C6.82457 6 6.57021 6.10536 6.38268 6.29289C6.19514 6.48043 6.08978 6.73478 6.08978 7C6.08978 7.26522 6.19514 7.51957 6.38268 7.70711C6.57021 7.89464 6.82457 8 7.08978 8H14.6798L6.37978 16.29C6.28605 16.383 6.21166 16.4936 6.16089 16.6154C6.11012 16.7373 6.08398 16.868 6.08398 17C6.08398 17.132 6.11012 17.2627 6.16089 17.3846C6.21166 17.5064 6.28605 17.617 6.37978 17.71C6.47275 17.8037 6.58335 17.8781 6.70521 17.9289C6.82707 17.9797 6.95777 18.0058 7.08978 18.0058C7.22179 18.0058 7.3525 17.9797 7.47436 17.9289C7.59622 17.8781 7.70682 17.8037 7.79978 17.71L16.0898 9.41V17C16.0898 17.2652 16.1951 17.5196 16.3827 17.7071C16.5702 17.8946 16.8246 18 17.0898 18C17.355 18 17.6094 17.8946 17.7969 17.7071C17.9844 17.5196 18.0898 17.2652 18.0898 17V7C18.0882 6.86932 18.061 6.74022 18.0098 6.62Z" />
                                </svg>
                            </span>
                            <span>
                                Book now
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M18.0098 6.62C17.9083 6.37565 17.7141 6.18147 17.4698 6.08C17.3496 6.02876 17.2205 6.00158 17.0898 6H7.08978C6.82457 6 6.57021 6.10536 6.38268 6.29289C6.19514 6.48043 6.08978 6.73478 6.08978 7C6.08978 7.26522 6.19514 7.51957 6.38268 7.70711C6.57021 7.89464 6.82457 8 7.08978 8H14.6798L6.37978 16.29C6.28605 16.383 6.21166 16.4936 6.16089 16.6154C6.11012 16.7373 6.08398 16.868 6.08398 17C6.08398 17.132 6.11012 17.2627 6.16089 17.3846C6.21166 17.5064 6.28605 17.617 6.37978 17.71C6.47275 17.8037 6.58335 17.8781 6.70521 17.9289C6.82707 17.9797 6.95777 18.0058 7.08978 18.0058C7.22179 18.0058 7.3525 17.9797 7.47436 17.9289C7.59622 17.8781 7.70682 17.8037 7.79978 17.71L16.0898 9.41V17C16.0898 17.2652 16.1951 17.5196 16.3827 17.7071C16.5702 17.8946 16.8246 18 17.0898 18C17.355 18 17.6094 17.8946 17.7969 17.7071C17.9844 17.5196 18.0898 17.2652 18.0898 17V7C18.0882 6.86932 18.061 6.74022 18.0098 6.62Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                        <i class="fa-light fa-bars"></i>
                    </a>
                </div>
            </nav>
        </div>
                
    </header>
    <section>



    <?php
// Configuración de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wk4rent";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se pasó el parámetro id en la URL
if (isset($_GET['id'])) {
    $id_coche = $_GET['id'];
    $sql = "SELECT * FROM automoviles WHERE id = $id_coche";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $coche = $result->fetch_assoc();
        echo "<h1>Reservar: " . $coche['marca'] . " " . $coche['modelo'] . "</h1>";
        echo "<p>Precio por día: $" . number_format($coche['precio'], 2) . "</p>";

        // Verifica si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre_cliente = $_POST['nombre_cliente'];
            $telefono_cliente = $_POST['telefono_cliente'];
            $email_cliente = $_POST['email_cliente'];
            $ubicacion_entrega = $_POST['ubicacion'];
            $fecha_inicio = $_POST['fecha_inicio'];
            $fecha_fin = $_POST['fecha_fin'];
            $precio_por_dia = $coche['precio'];

            // Calcular el número de días
            $inicio = new DateTime($fecha_inicio);
            $fin = new DateTime($fecha_fin);
            $dias = $inicio->diff($fin)->days;

            // Calcular el precio total
            $total = $precio_por_dia * $dias;

            // Mostrar el resumen
            echo "<h2>Resumen de tu reserva:</h2>";
            echo "<p>Nombre: $nombre_cliente</p>";
            echo "<p>Email: $email_cliente</p>";
            echo "<p>Teléfono: $telefono_cliente</p>";
            echo "<p>Ubicación de entrega: $ubicacion_entrega</p>";
            echo "<p>Fecha inicio: $fecha_inicio</p>";
            echo "<p>Fecha fin: $fecha_fin</p>";
            echo "<p>Días: $dias</p>";
            echo "<p>Total: $" . number_format($total, 2) . "</p>";

            // Formulario para procesar el pago
            echo '<form method="POST" action="pagos.php">';
            echo '<input type="hidden" name="id_auto" value="'.$coche['id'].'">';
            echo '<input type="hidden" name="nombre_cliente" value="'.$nombre_cliente.'">';
            echo '<input type="hidden" name="telefono_cliente" value="'.$telefono_cliente.'">';
            echo '<input type="hidden" name="email_cliente" value="'.$email_cliente.'">';
            echo '<input type="hidden" name="ubicacion_entrega" value="'.$ubicacion_entrega.'">';
            echo '<input type="hidden" name="fecha_inicio" value="'.$fecha_inicio.'">';
            echo '<input type="hidden" name="fecha_fin" value="'.$fecha_fin.'">';
            echo '<input type="hidden" name="dias" value="'.$dias.'">';
            echo '<input type="hidden" name="total" value="'.$total.'">';
            echo '<button type="submit">Pagar Ahora</button>';
            echo '</form>';
        } else {
            // Mostrar el formulario de entrada
            echo '<form method="POST">';
            echo '<label>Nombre:</label><input type="text" name="nombre_cliente" required>';
            echo '<label>Teléfono:</label><input type="text" name="telefono_cliente">';
            echo '<label>Email:</label><input type="email" name="email_cliente" required>';
            echo '<label>Ubicación de entrega:</label><input type="text" name="ubicacion" required>';
            echo '<label>Fecha inicio:</label><input type="date" name="fecha_inicio" required>';
            echo '<label>Fecha fin:</label><input type="date" name="fecha_fin" required>';
            echo '<button type="submit">Calcular precio</button>';
            echo '</form>';
        }
    } else {
        echo "Coche no encontrado.";
    }
} else {
    echo "No se ha seleccionado ningún coche.";
}

// Cerrar conexión
$conn->close();
?>




</section>
<footer class="pt-40">
        <div class="container-fluid">
            <div class="row mb-16 row-gap-4">
                <div class="col-lg-3">
                    <div class="txt-block">
                        <a href="index.html">
                            <img src="assets/media/footer/logo.png" alt="logo">
                        </a>
                    </div>
                    <p class="mb-32">Welcome to White Knight vehicle Rental, offering safety, and reliability for international customers in Quintana roo and Yucatan.</p>
                    <h6 class="white mb-16">Subscribe To Our Newsletter</h6>
                    <form action="index.html" class="newsletter-form">
                        <input type="email" name="email" id="eMail" class="form-input" placeholder=" Your email address">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_383_5670)">
                                    <path d="M19.8284 0.171647C19.6626 0.00586635 19.414 -0.0451101 19.1965 0.041921L0.36834 7.57308C0.152911 7.65925 0.00865304 7.86441 0.00037181 8.09632C-0.00787036 8.32819 0.121504 8.54308 0.330254 8.64433L7.75477 12.2451L11.3556 19.6697C11.4538 19.8722 11.6589 19.9999 11.8827 19.9999C11.8896 19.9999 11.8966 19.9998 11.9036 19.9995C12.1355 19.9913 12.3407 19.847 12.4268 19.6316L19.9581 0.803599C20.0451 0.585943 19.9941 0.337389 19.8284 0.171647ZM2.0349 8.16862L16.9812 2.19016L8.07383 11.0974L2.0349 8.16862ZM11.8313 17.9651L8.90246 11.926L17.8099 3.01875L11.8313 17.9651Z" fill="#2D74BA" />
                                </g>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-8 offset-lg-1">
                    <div class="row">
                        <div class="col-6">
                            <div class="links-block">
                                <h6 class="mb-32">Quick Links</h6>
                                <ul class="unstyled">
                                    <li class="mb-12"><a href="index.html">Home </a></li>
                                    <li class="mb-12"><a href="about.html">About Us</a></li>
                                    <li class="mb-12"><a href="blogs.html">Blogs</a></li>
                                    <li class="mb-12"><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="links-block">
                                <h6 class="mb-32">Information</h6>
                                <ul class="unstyled">
                                    <li class="mb-12"><a href="rental.html">Rentals</a></li>
                                    <li class="mb-12"><a href="book-now.html">Booking Form</a></li>
                                    <li class="mb-12"><a href="booking.html">Booking Details</a></li>
                                    <li class="mb-12"><a href="index.html">Brands</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="links-block">
                        <div class="mb-24">
                            <h6 class="mb-32">Contact info</h6>
                        </div>
                        <ul class="unstyled">
                            <li class="mb-16"><div class="d-flex align-items-center"><i class="fa fa-phone"></i> <a href="tel:00 0000 0000">00 0000 0000</a></div></li>
                            <li class="mb-16"><div class="d-flex align-items-center"><i class="fa fa-map-marker"></i> <a href="https://goo.gl/maps/xZZtQG7gYfuKbJ8T7" target="_blank">Street Address, City, Country</a></div></li>
                            <li><div class="d-flex align-items-center"><i class="fa fa-envelope"></i> <a href="mailto:info@whiteknight.com">info@whiteknight.com</a></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/smooth-scrollbar.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
