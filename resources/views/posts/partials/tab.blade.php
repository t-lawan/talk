<div class="container">


    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">

                  <ul class="nav nav-pills nav-justified">

                      <li class="nav-item active">
                        <a class="nav-link " data-toggle="pill" href="#showtopposts">Top Posts</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#showuserposts">My Posts</a>
                      </li>


                  </ul>

                </div>

                <div class="panel-body">
                  <div class="tab-content">
                      <div class="tab-pane active" id="showtopposts" >

                      @foreach ($posts as $post)
                        @if($post->private === 0)
                          @include('posts.partials.post')
                        @endif
                      @endforeach


                      </div>

                      <div class="tab-pane" id="showuserposts" >
                        @foreach ($posts as $post)
                          @if($post->user->id === auth()->user()->id)
                            @include('posts.partials.post')
                          @endif
                        @endforeach


                      </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
