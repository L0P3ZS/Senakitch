
<x-layauts.app title="Opiniones">



    <section class="review" id="review">



        <h1 class="heading"> su <span>opinion</span> </h1>

        <button id="modal-btn">Comentar</button>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Modal Title</h2>

                @if(Auth::check())

               

                <form action="{{route('comentarios.store')}}" method="POST">
                    @csrf

                    <input type="text" name="" value="{{Auth::user()->username}}" readonly><br>

                    <label for="">Deja tu comentario</label><br>
                    
                    <input type="text" name="description">
                    <!-- <input type="hidden" name="idusers" value="{{Auth::user()->id}}"> -->
                    <br>
                    <button type="submit">Enviar</button>

                </form>
                
                @endif

            </div>
        </div>

    
    
        <div class="box-container">
        @forelse($comentarios as $row )
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>{{ $row->description }}</p>
                <img src="images/anuel.jpg" class="user" alt="">
                
                
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            @empty
            no hay comentarios
            @endforelse
        </div>
   
   
        <br>
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
            <a href="#home">inicio</a>
            <a href="#about">acerca de</a>
            <a href="#menu">menu</a>
            <a href="#products">productos</a>
            <a href="#review">opiniones</a>
            <a href="#contact">contacto</a>
            <a href="#blogs">recetas</a>
        </div>

        <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</x-layauts.app>