<form method="POST" action="/posts/{{$post->id}}/privacy">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <button class="btn btn-secondary"type="submit">
       <i class="material-icons md-18">
         {{$lock}}
       </i>
     </button>
</form>
