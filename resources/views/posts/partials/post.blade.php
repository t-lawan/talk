<div class="panel panel-default">
  <div class="panel-body">

      <div class="media" >
        <div class="row">
          <div class="col-xs-5">
            <img class="d-flex align-self-start mr-3 img-rounded img-responsive" src="{{$post->user->image->location}}" alt="Generic placeholder image" width="60" height="60">
          </div>
          @if($post->user->id === auth()->id())
          <div class="col-xs-2">

              @if($post->private === 0)
                <?php $lock = "lock_open"  ?>
              @else
                <?php $lock = "lock_outline" ?>
              @endif

              @include('posts.partials.form.changeprivacy')

          </div>

          <div class="col-xs-2">
            <button class="btn btn-secondary" data-toggle="collapse" data-target="#post{{$post->id}}">
               <i class="material-icons md-18 align-right ">
                 edit
               </i>
             </button>
          </div>

          <div class="col-xs-2">
            @include('posts.partials.form.delete')
          </div>
          @endif

        </div>

        <div class="media-body">
          <div class="row">
            <div class="col-xs-8">
              <h4 class="mt-0">

                  {{$post->user->name}} <small class="text-muted"> <i>Posted on {{$post->created_at->toFormattedDateString()}}</i></small>
              </h4>
            </div>



          </div>
              <a href="/posts/{{$post->id}}" class="post">
                <p class="lead">{{$post->body}}</p>
              </a>
        </div>

      </div>
      <div class="collapse" id="post{{$post->id}}">
        @include('posts.partials.form.update')
      </div>

    </div>


  </div>
