<form method="POST" action="/posts/{{$post->id}}/">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn"type="submit">
       <i class="material-icons md-18">
         delete
       </i>
     </button>
</form>
