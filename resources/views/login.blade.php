<x-layouts.app 
    title="Login" 
    meta-description="Registrometa description">
   
    <h1>Login</h1><br>

    <div class="dLogin">
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

    <button class="btnLog" type="submit" style="margin-left:35px;">Entrar</button> 
    <br><br><br><br>
    <a style="margin-left:52px;"href="{{route('posts.index')}}">Regresar</a>
    </form>
    </div>
</x-layouts.app>