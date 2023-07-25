
<x-layauts.app title="Opiniones">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">

    <section class="review" id="review">



        <h1 class="heading"> su <span>opinion</span> </h1>

        <style>
            body {
                font-family: "Edu SA Beginner", cursive;
            }
        </style>

        <button id="modal-btn">Comentar</button>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 class="texto">Deja tu Comentario</h2>

                @if(Auth::check())
                <form action="{{route('comentarios.store')}}" method="POST">
                    @csrf

                    <label class="texto" for="">Tu Nombre de Usuario:</label>
                    <input class="texto" type="text" name="" value="{{Auth::user()->username}}" readonly>

                    <label class="texto" for="">Comentario:</label>
                    <input class="texto" type="text" name="description">

                    <input type="hidden" name="idUser" value="{{Auth::user()->id}}">
                    <button class="texto" type="submit">Enviar</button>
                </form>
                @endif
            </div>
        </div>

        <script>
            document.getElementById("modal-btn").addEventListener("click", function() {
                document.getElementById("modal").style.display = "block";
            });

            document.getElementsByClassName("close")[0].addEventListener("click", function() {
                document.getElementById("modal").style.display = "none";
            });
        </script>




        <div  class="box-container">
        @forelse($comentarios as $row )
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>{{ $row->description }}</p>
                <img src="images/anuel.jpg" class="user" alt="">
                <h3>{{ $row->user->username }}</h3>
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
