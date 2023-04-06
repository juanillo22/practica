<x-layouts.app 
    title="Registro" 
    meta-description="Registrometa description">
   
    <h1>Registro</h1><br>

    <form  action="{{route('registro')}}" method="POST">
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
        <input  type="password" name="password" type="text" value="{{old('password')}}">
        @error('pass')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror   
    </label>
    <br><br>
    {{-- <label><input type="checkbox" id="record" value="first_checkbox"> Recordar</label><br>
    <br><br> --}}
    <button type="submit" style="margin-left:55px;">Enviar</button>  
    </form>

    <br><br><br>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-layouts.app>