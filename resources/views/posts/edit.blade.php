<x-layouts.app
    :title="$post->title" 
    >

<h1>Formulario de edición</h1>
<form  action="{{route('posts.update', $post)}}" method="POST">
    @csrf @method('PATCH')   
    
    @include('posts.form')
    
</form>
<br>
<a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>