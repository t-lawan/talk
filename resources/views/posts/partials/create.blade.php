<!-- Create Post-->
<div class="container create-posts">
  <div class="row">



      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default ">

            <form method="post" action="/posts">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel-heading">

                    <div class="form-group">
                      <textarea class="form-control no-border input-lg" rows="2" id="post_body" name="body" placeholder="What's on your mind?" required="true"></textarea>
                    </div>

                @include('layouts.errors')

                <div class="endform">
                  <div class="btn-group col-md-8" data-toggle="buttons">
                    <label class="btn btn-outline-secondary btn-lg active">
                      <input type="radio" name="private" id="private" value="1" autocomplete="off" checked> Private
                    </label>

                    <label class="btn btn-outline-secondary btn-lg">
                      <input type="radio" name="private" id="public" value="0" autocomplete="off"> Public
                    </label>

                  </div>


                    <div class="form-group offset-sm-10 ">
                      <button type="submit" class="btn btn-outline-secondary btn-lg" id ='postsubmitbutton'>Publish</button>
                    </div>

                    </div>
                </div>




            </form>

        </div>

    </div>

  </div>
</div>


<script>

  $(document).ready(function()
  {
    $('.endform').hide();
  });

  $('#post_body').on('focus',function(){
    $('.endform').show();
  })

  $('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');

    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }

    $(this).find('.btn').toggleClass('btn-default');

});



</script>
