<link rel="stylesheet" href="css/app.css" />
<x-layouts.app
    title="Blog" 
    meta-description="Blog meta description"> 
    <h1>Blog</h1>
    <br><br>
    @auth
    <h2><a href="{{route('posts.create')}}"> Crear nuevo post</a></h2><br>
    @endauth
    <br>
     @foreach ( $posts as $post )
     <div style="margin-top:15px;">
        <h2 ><a href="/blog/{{$post->id}}">{{$post->title}}</a></h2> &nbsp; 
        <div class="posts">
        @auth
        <a style=""class="editar" href="{{route('posts.edit',$post)}}">(Editar)</a>
        <br>
        <form action="{{route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            &nbsp; &nbsp;<button type='submit' class="btnEli">Eliminar</button>
        </form>
        </div>
        <br>
        @endauth
     </div>
     @endforeach 
</x-layouts.app>