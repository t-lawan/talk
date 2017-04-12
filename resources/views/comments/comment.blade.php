  <li class="media">
    <img class="d-flex mr-3" src="http://placehold.it/70" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">
        <a href="/posts/{{$post->id}}">
          Username <small class="text-muted"> <i>Posted  {{$comment->created_at->diffForHumans()}}</i></small>
        </a>
      </h5>
      <p>
        {{$comment->body}}
      </p>
    </div>
  </li>
