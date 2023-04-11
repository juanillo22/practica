<div class="divNav">
    <nav>
        <br>  
        <div><li><a href="{{route('home')}}" style="">Home</a></li></div>
        <div><li><a href="{{route('posts.index')}}">Blog</a></li></div>
        <div><li><a href="{{route('about')}}">About</a></li></div>
        <div><li><a href="{{route('contact')}}">Contacto</a></li></div>
        
        @auth
        <form action="{{route('logout')}}" method="POST">
        @csrf
        <div class="btnReg1"><li><a href="#" onclick="this.closest('form').submit()">Logout</a></li></div>
        </form>
         <div class="btnReg2">Bienvenido {{Auth::user()->name}}</div>
        @endauth

        @guest
        <div class="btnInv1"><li><a href="{{route('login')}}">Login</a></li></div>
        <div class="btnInv2"><li><a href="{{route('registro')}}">Registrarse</a></li>
        @endguest
    </nav>
</div>