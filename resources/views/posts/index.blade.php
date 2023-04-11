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
     <div style="margin-top:10px;">
        <h2><a class="posts" href="/blog/{{$post->id}}">{{$post->title}}</a></h2> &nbsp; 
        <div class="divEdEl">
        @auth
        <button type='submit' class="btnEli" style="padding:3px;"><a  href="{{route('posts.edit',$post)}}">Editar</a></button>
        <br>
        <form action="{{route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            &nbsp; &nbsp;<button type='submit' class="btnEli" style="padding:3px;">Eliminar</button>
        </form>
        </div>
        <br>
        @endauth
     </div>
     @endforeach 
</x-layouts.app>