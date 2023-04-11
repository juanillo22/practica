<x-layouts.app
    :title="$post->title" 
    >
    
<br>
<h1>Id: {{$post->id}}</h1>
<h1>Título: {{$post->title}}</h1>
<p>{{$post->body}}</p>
<br><br>
<a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>