<x-layouts.app

    title="Crear nuevo post" 
    >

<h1>Crear nuevo post</h1>
<form  action="{{route('posts.store')}}" method="POST">
    @csrf
    
    @include('posts.form')

</form>
<br>
<a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>