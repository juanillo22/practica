<x-layouts.app 
    title="Login" 
    meta-description="Registrometa description">
   
    <h1>Login</h1><br>

    <form  action="{{route('login')}}" method="POST">
        @csrf
        <label>
        Correo:
        <br>
        <input name="email" type="email" value="{{old('email')}}">
        @error('email')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror
        <br><br>
    </label>
    <label>
        Contraseña:
        <br>
        <input  type="password" name="password" type="text" value="{{old('password')}}">
        @error('pass')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
    </label>
    <br><br>
    <label><input type="checkbox" name="remember" style="margin-left:30px;"> Recuérdame</label><br>
    <br><br>
    <button type="submit" style="margin-left:65px;">Entrar</button>  
    </form>

    <br><br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>