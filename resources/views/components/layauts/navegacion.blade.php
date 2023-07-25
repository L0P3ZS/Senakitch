<header class="header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <a href="{{ route ('home') }}" class="logo">
        <img src="img/kitch.png" alt="">

    </a>


    <nav class="navbar">
        <a href="<?php echo e(route('perfil')); ?>"><i class="fa-regular fa-user"></i></a>
        <a href="{{ route ('home') }}">inicio</a>
        <a href="{{ route('nosotros') }}">acerca de</a>
        <a href="{{ route('menu') }}">menu</a>
        <a href="{{ route('productos') }}">productos</a>
        <a href="{{ route('opiniones') }}">opiniones</a>
        <a href="{{route('contactos')}}">contacto</a>
        <a href="{{ route('recetas') }}">Recetas</a>

    </nav>



    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn">
            {{ \Cart::getTotalQuantity()}}
        </div>
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user-profile" id="menu-btn"></div>


    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="que estas buscando...">
        <label for="search-box" class="fas fa-search"></label>
    </div>



</header>
