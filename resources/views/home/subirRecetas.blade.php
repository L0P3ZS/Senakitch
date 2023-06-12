<x-layauts.app title="formulario">

<section class="formulario">
    <h1>¿Como hecer empanadas de queso?</h1>

    <div class="card">
    <form action="{{ route('crudRecetas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">
            <input type="text" name="name" id="">
        </label><br>
        <label for="">
            <input type="file" name="images" id="" accept="image/*">

        </label>
        <label for="">
            ingredientes
            <br>
            <input name="ingredients" id="" cols="30" rows="10"></input>
        </label>
        <br>
        
        <label for="">
            preparacion
            <br>
            <input name="description" id="" cols="30" rows="10"></input>
        </label>
        <br>
        
        
        <button type="submit">enviar</button>
    </form>

    </div>
</section>


</x-layauts.app>