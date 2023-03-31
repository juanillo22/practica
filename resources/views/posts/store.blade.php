<x-layouts.app
    :title="Crear nuevo post" 
    >

<h1>Crear nuevo post</h1>
<form method="POST">
    <label>
        Titulo
        <br>
        <input type="text">
    </label>
    <br>
    <button type="submit">Enviar</button>
    <br>
</form>
<br>

<a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>