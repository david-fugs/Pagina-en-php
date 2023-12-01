<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu" >
                <img src="/imgs/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1> Medical Center mor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam nihil doloremque saepe error
                    nesciunt. Fugiat repudiandae nisi dolor fuga magni veritatis? Veniam quam accusantium doloribus
                    alias? Neque id expedita commodi.</p>
                <a href="#" class="btn-1">informacion </a>
            </div>
                <div class="header-img">

                    <img src="/imgs/left.png" alt="abaout">
                </div>
            </div>
        </div>
    </header>       
    <section class="about container">
        <div class="about-img">
            <img src="/imgs/about.png" alt="">
        </div>
    
    <div class="about-txt">
        <h2> Nosotros</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam iste accusamus modi asperiores
            velit explicabo autem incidunt recusandae provident fugiat quia, expedita ab tempora omnis
            delectus cupiditate debitis pariatur laborum.</p>
        <br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam vero ipsam assumenda deleniti
            vel earum, in saepe sapiente fugiat. Veniam quam quasi id quo odit iste, commodi dolor eius
            repudiandae.</p>
    </div>
</section>





    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class=" fa-solid fa-bed-pulse"></i>
                <h3>Dermatologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid  fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid  fa-stethoscope"></i>
                <h3>Ginecologia</h3>
            </div>



        </div>

    </main>

    <section class="formulario container">
        <form action="" method="POST" autocomplete="off">
            <h2>Agenda consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" id="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" id="phone" placeholder="Telefono celular">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email"  placeholder=" email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="detalles de consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunciton()">

            </div>
        </form>

    </section>
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>

    </footer>
    <?php
        include("send.php")

    ?>

    <script src="/script.js"></script>
</body>

</html>