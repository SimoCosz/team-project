<form action="{{route('comics.store')}}" method="post">
    @csrf 
    <input type="text" name="title" placeholder="titolo del post">
    <textarea name="body" id="" cols="30" rows="10" placeholder="contenuto articolo"></textarea>
    <input type="submit" value="SALVA">
</form>