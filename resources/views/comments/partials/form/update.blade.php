<div class="container-fluid">
  <form method="POST" action="/comments/{{$comment->id}}/">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
              <textarea class="form-control" rows="3" id="body" type="text" name="body">{{ $comment->body}}</textarea>
              <button type="submit" class="btn btn-block">Change Comment</button>

      </div>
  </form>  
</div>
