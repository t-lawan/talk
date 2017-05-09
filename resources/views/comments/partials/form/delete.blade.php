<form method="POST" action="/comments/{{$comment->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-secondary"type="submit">
       <i class="material-icons md-18 align-right ">
         delete
       </i>
     </button>
</form>
