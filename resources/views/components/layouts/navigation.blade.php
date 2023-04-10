<div>
    <nav>
        <br>  
        <div><li><a href="{{route('home')}}" style="">Home</a></li></div>
        <div><li><a href="{{route('posts.index')}}">Blog</a></li></div>
        <div><li><a href="{{route('about')}}">About</a></li></div>
        <div><li><a href="{{route('contact')}}">Contacto</a></li></div>
        
        @auth
        <form action="{{route('logout')}}" method="POST">
        @csrf
        <div><button class="btn">Logout</button></div>
        </form>
        @endauth

        @guest
        <div><li class="login"><a href="{{route('login')}}">Login</a></li></div>
        <div><li class="registro"><a href="{{route('registro')}}">Registrarse</a></li>
        @endguest
    </nav>
</div>