<!-- Create Comment-->
<div class="container-fluid create-posts">

        <div class="panel panel-default ">

            <form method="post" action="/posts/{{$post->id}}/comments">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel-heading">
                    <div class="form-group">
                        <textarea class="form-control input-lg no-border" rows="2" id="comment_body" name="body" placeholder="Your comment here." required="true"></textarea>
                    </div>
                </div>
                @include('layouts.errors')

                  <button type="submit" class="btn btn-outline-secondary offset-sm-9 btn-lg" id ='commentsubmitbutton'>Add Comment</button>



            </form>

        </div>




</div>


<script>

  $(document).ready(function()
  {
    $('#commentsubmitbutton').hide();
  });

  $('#comment_body').on('focus',function(){
    $('#commentsubmitbutton').show();
  })




</script>
