  <div class="panel panel-default col-md-10 col-md-offset-1">
    <div class="panel-body">
      <li class="media">
        <div class="row">
          <div class=" col-sm-8">
            <img class="d-flex align-self-start mr-3 img-rounded img-responsive" src="{{$comment->user->image->location}}" alt="Generic placeholder image" width="60" height="60">
          </div>

          @if($comment->user->id === auth()->id())
            <div class="col-sm-1">
              <button class="btn" data-toggle="collapse" data-target="#comment{{$comment->id}}">
                 <i class="material-icons md-18 align-right ">
                   edit
                 </i>
               </button>
            </div>

            <div class="col-sm-1">
              @include('comments.partials.form.delete')
            </div>
          @endif
        </div>



        <div class="media-body">
          <div class="row">
            <div class="col-sm-9">
              <h5 class="mt-0 mb-1">
                <a href="/posts/{{$post->id}}">
                  {{$comment->user->name}} <small class="text-muted"> <i>Posted  {{$comment->created_at->diffForHumans()}}</i></small>
                </a>
              </h5>
            </div>



          </div>

          <p>
            {{$comment->body}}
          </p>
        </div>
      </li>
      <div class="collapse" id="comment{{$comment->id}}">
        @include('comments.partials.form.update')
      </div>
    </div>


  </div>
