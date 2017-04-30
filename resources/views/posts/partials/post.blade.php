<a href="/posts/{{$post->id}}" class="post">
  <div class="media" >
    <img class="d-flex align-self-start mr-3 img-rounded img-responsive" src="{{$post->user->image->location}}" alt="Generic placeholder image" width="60" height="60">
    <div class="media-body">
      <div class="row">
        <div class="col-sm-10">
          <h4 class="mt-0">

              {{$post->user->name}} <small class="text-muted"> <i>Posted on {{$post->created_at->toFormattedDateString()}}</i></small>
          </h4>
        </div>

        <div class="col-sm-1">
          <i class="material-icons md-18 align-right ">
            @if($post->private === 0)
              lock_open
            @else
              lock_outline
            @endif

          </i>
        </div>

      </div>

        <p class="lead">{{$post->body}}</p>

    </div>

  </div>
  <hr />
</a>
