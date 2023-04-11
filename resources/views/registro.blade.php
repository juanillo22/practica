<x-layouts.app 
    title="Registro" 
    meta-description="Registrometa description">
    
    <br><h1>Registro</h1><br>
    
    <div class="dReg">
    <form  action="{{route('registro')}}" method="POST">
        @csrf
        <label>
        Nombre:
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
        <input  type="password" name="password" type="text">
        @error('password')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
        </label>

        <br><br>
        <label>
        Confirmar contraseña:
        <br>
        <input  type="password" name="password_confirmation" type="text">
        @error('password_confirmation')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
        </label>
        <br><br><br><br>
        
        <button class="btnReg" type="submit" style="margin-left:20px;">Registrarse</button> <br><br><br><br>
        <a style="margin-left:60px;" href="{{route('posts.index')}}">Regresar</a>
    </form>  
    </div>
</x-layouts.app>