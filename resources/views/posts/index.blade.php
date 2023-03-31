<x-layouts.app
    title="Blog" 
    meta-description="Blog meta description">
   
    <h1>Blog</h1>
    <br>
    @auth
    <h2><a style="color:#4668F0;" href="{{route('posts.create')}}"> Crear nuevo post</a></h2>
    @endauth
    <br>

     @foreach ( $posts as $post )
     <div style="display:flex; align-items:baseline">
        <h2><a href="/blog/{{$post->id}}">{{$post->title}}</a></h2> &nbsp; &nbsp;
        @auth
        <a href="{{route('posts.edit',$post)}}">(Editar)</a> &nbsp; &nbsp;
        <form action="{{route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit'>Eliminar</button>
        </form>
        @endauth
     </div>
     @endforeach   
</x-layouts.app>