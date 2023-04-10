<div>
<nav>
    <br>  
        <li><a href="{{route('home')}}" style="">Home</a></li>
        <li><a href="{{route('posts.index')}}">Blog</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('contact')}}">Contacto</a></li>
        
        @auth
        <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn">Logout</button>
        </form>
        @endauth

        @guest
        <li class="login"><a href="{{route('login')}}">Login</a></li>
        <li class="registro"><a href="{{route('registro')}}">Registrarse</a></li>
        @endguest
</nav>
</div>