
<div class="media">
  <img class="d-flex align-self-start mr-3 img-rounded img-responsive" src="http://placehold.it/70" alt="Generic placeholder image">
  <div class="media-body">
    <h4 class="mt-0">
      <a href="/posts/{{$post->id}}">
        {{$post->user->name}} <small class="text-muted"> <i>Posted on {{$post->created_at->toFormattedDateString()}}</i></small>

      </a>
    </h4>

    <p class="lead">{{$post->body}}</p>
  </div>

</div>
<hr />
