<label>
        <br>
        <h2>Título:<h2>
        <input name="title" type="text" value="{{old('title', $post->title)}}">
        @error('title')
        <br>
        <small style="color: red">{{$message}}</small>
        @enderror
</label>
<br><br>
<button class="btnPosts" type="submit">Guardar</button>
<br><br>