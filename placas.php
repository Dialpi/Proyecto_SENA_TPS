<?php
require 'Liber-Arte/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1 " );
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liber-Arte</title>
    <link rel="stylesheet" href="./CSS/placas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="header">
        <div class="topheader">
            <div class="wrapper">
                <div class="telefono">
                    <span id="telefono" onclick="location.href='https://api.whatsapp.com/send?phone=573118216336&text=Estoy%20interesado%20en%20sus%20productos'"><i class="fa-solid fa-phone"></i>3118216336</span>
                </div>
                <nav>
                    <a onclick="location.href='./Liber-Arte/usuario_login.php'"><i class="fa-regular fa-user"></i> Inicia sesion</button>
                        <a onclick="location.href='./registro.html'"><i class="fa-regular fa-user"></i>Registrate</button>
                </nav>
            </div>
        </div>
        <div class="wrapper">
            <div class="logo">
                <a onclick="location.href='./index.html'"> <img src="./Imagenes/Logos/logo.png" width="300px"></a>
            </div>
            <nav>
                <a href="./index.html"></i>Inicio</a>
                <a href="./placas.html">Placas</a>
                <a href="./tasa.html">Pocillos</a>
                <a href="./otros.html">Otros</a>
                <a href="./contacto.html">Contacto</a>
            </nav>
        </div>
    </header>
    <main>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach($resultado as $row) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                                <?php
                                $id = $row['id'];
                                $imagen = "Imagenes/Productos/Placa mesa/" . $id . "/principal.jpeg";

                                if (!file_exists($imagen)) {
                                    $imagen = "Imagenes/Productos/no-photo.jpg";
                                };
                                ?>
                                <img src="<?php echo $imagen; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                                <p class="card-text">$ <?php echo number_format($row['precio'], 0, '.', ','); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-primary">Detalles</a>
                                    </div>
                                    <a href="" class="btn btn-success">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>

    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <span>
                    <a href="./index.html">
                        <img src="./Imagenes//Logos/logo.png" alt="Logo de Liber-Arte" width="300px">
                    </a>
                </span>
            </div>
            <div class="box">
                <h2>-SOBRE NOSOTROS</h2>
                <p>Por que creemos en segundas oportunidades.</p>
                <p>Realizamos función social con policías y militares privados de la libertad</p>
            </div>
            <div class="box">
                <h2>-SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://web.facebook.com/people/Liber-Arte/100068606932760/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/liberarte.ponal/" class="fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=573118216336&text=Estoy%20interesado%20en%20sus%20productos" class="fa-solid fa-headset"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Liber-Arte</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/32f04e2b6c.js" crossorigin="anonymous"></script><!-- Se usa para sacar iconos o fuentes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>