<x-layauts.ap title="Recetas">


  <section class="blogs" id="blogs">

    <h1 class="heading"> nuestras <span>recetas </span> </h1>

   
    <div class="box-container">
    @foreach($recetas as $row)
      <div class="box">
        <div class="image">
          <img src="{{ asset('storage/' . $row->images) }}" alt="">
        </div>
        <div class="content">
          <a href="#" class="title">{{ $row->name}}</a>
          <span>by Daniel García / 21 mayo, 2022</span>
          <p class="overflow-ellipsis">{{$row->ingredients }}</p>
          <a href="{{route ('verRecetas',$row) }}" class="btn">leer mas</a>
        </div>
      </div>
      @endforeach
    </div>
    


    
  </section>


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
      <a href="<?php echo e(route('nosotros')); ?>">acerca de</a>
      <a href="<?php echo e(route('menu')); ?>">menu</a>
      <a href="<?php echo e(route('productos')); ?>">productos</a>
      <a href="<?php echo e(route('opiniones')); ?>">opiniones</a>
      <a href="{{route('contactos')}}">contacto</a>
      <a href="<?php echo e(route('recetas')); ?>">Recetas</a>
    </div>

    <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

  </section>





  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/jm.js') }}"></script>
</x-layauts.ap>