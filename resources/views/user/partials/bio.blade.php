
<div class="media">
  <img class="d-flex align-self-start mr-3 img-rounded img-responsive" src="{{$post->user->image->location}}" alt="Generic placeholder image">
  <div class="media-body">
    <h4 class="mt-0">
      <a href="#">
        {{$user->name}} <small class="text-muted"> <i>Posted on {{$post->created_at->toFormattedDateString()}}</i></small>

      </a>


    </h4>

    <p class="lead">{{$post->body}}</p>
  </div>

</div>
<hr />
