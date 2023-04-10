<x-layouts.app 
    title="Registro" 
    meta-description="Registrometa description">
   
    <h1>Registro</h1><br>

    <form  action="{{route('registro')}}" method="POST">
        @csrf
        <label>
        Name:
        <br>
        <input name="name" type="text" value="{{old('name')}}">
        @error('name')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror
        <br><br>
        </label>

        <label>
        Email:
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
        @error('password')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
        </label>

        <br><br>
        <label>
        Confirmar contraseña:
        <br>
        <input  type="password" name="password_confirmation" type="text" value="{{old('password_confirmation')}}">
        @error('password_confirmation')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
        </label>
        <br><br>
        
        <button type="submit" style="margin-left:70px;">Enviar</button>  
    </form>

    <br><br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>