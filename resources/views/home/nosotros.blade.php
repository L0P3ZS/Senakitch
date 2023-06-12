<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/img/logosena.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Senakicht</title>
    <link rel="stylesheet" href="{{ asset('css/cer.css') }}">

</head>




<body>
    <header>
        <div class="textos">
            <h1 class="titulo">Senakitch</h1>
            <h3 class="subtitulo">Compartiendo Nuestros Conocimientos</h3>
        </div>
        <div class="sesgoabajo"></div>
    </header>
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Sobre nosotros</h2>

                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dicta rem hic totam necessitatibus
                    tempora animi error perferendis. Vero corrupti porro quia! Ad saepe alias, officiis voluptatem sed, odio
                    dolores neque dolorem placeat nam quia numquam soluta ipsam nostrum consequuntur, a magnam non. Tenetur
                    repudiandae distinctio inventore voluptate fugit laborum?</p>
                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dicta rem hic totam necessitatibus
                    tempora animi error perferendis. Vero corrupti porro quia! Ad saepe alias, officiis voluptatem sed, odio
                    dolores neque dolorem placeat nam quia numquam soluta ipsam nostrum consequuntur, a magnam non. Tenetur
                    repudiandae distinctio inventore voluptate fugit laborum?</p>

            </div>
        </section>

        
        <section class="galeria">
            <div class="sesgoarriba"></div>
            <div class="imagenes none">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/2.jpg" alt="">
                <div class="encima">
                    <h2>Senakicht</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="img/4.jpeg" alt="">

            </div>
            <div class="imagenes none">
                <img src="img/5.jpeg" alt="">
            </div>
            <div class="sesgoabajo"></div>
        </section>


        <section class="miembros">
            <div class="team">
                <h1>Nuestro<span>equipo</span></h1>
                <h3 class="slogan">Conoce a nuestro equipo de trabajo</h3>

                <div class="team_box">
                    <div class="profile">
                        <img src="image/chef1.png">

                        <div class="info">
                            <h2 class="name">Sebastian Paz</h2>
                            <p class="bio">Programador</p>

                            <div class="team_icon">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>

                        </div>

                    </div>

                    <div class="profile">
                        <img src="image/chef2.png">

                        <div class="info">
                            <h2 class="name">Sebastian Lopez</h2>
                            <p class="bio">Programador</p>

                            <div class="team_icon">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>

                        </div>

                    </div>

        </section>

    </main>


    <section class="footer">

        <div class="share">
            <a href="https://www.facebook.com/SENA" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/SENAComunica" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/senacomunica/" class="fab fa-instagram"></a>
            <a href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/" class="fab fa-linkedin"></a>
            <a href="https://co.pinterest.com/senacomunica/" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="<?php echo e(route('home')); ?>">inicio</a>
            <a href="#about">acerca de</a>
            <a href="<?php echo e(route('menu')); ?>">menu</a>
            <a href="<?php echo e(route('productos')); ?>">productos</a>
            <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
            <a href="{{route('contactos')}}">contacto</a>
            <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
        </div>

        <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

    </section>
</body>

</html>