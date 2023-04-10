<label>
        Título
        <br><br>
        <input name="title" type="text" value="{{old('title', $post->title)}}">
        @error('title')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror
</label>
<br><br>
<button type="submit">Enviar</button>
<br><br>