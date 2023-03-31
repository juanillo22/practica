<x-layouts.app 
    title="Registro" 
    meta-description="Registrometa description">
   
    <h1>Login</h1><br>

    <form  action="{{route('login')}}" method="POST">
        @csrf
        <label>
        Usuario:
        <br>
        <input name="name" type="text" value="{{old('name')}}">
        @error('name')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror
        <br><br>
    </label>
    <label>
        Contraseña:
        <br>
        <input  type="password" name="pass" type="text" value="{{old('pass')}}">
        @error('pass')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
    </label>
    <br><br>
    <label><input type="checkbox" name="remember" value="remember" id="remember"> Recuérdame</label><br>
    <br><br>
    <button type="submit" style="margin-left:55px;">Entrar</button>  
    </form>

    <br><br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>