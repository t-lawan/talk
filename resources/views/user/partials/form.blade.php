
<div class="container">
  <div class="row">


      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default ">
          <div class="panel-heading">
              <h3 class="text-center">Account</h3>
          </div>

          <div class="panel-body">

            <form method="POST" action="/settings/{{$user}}">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="media">
                <img width = "70" height = "70" class="d-flex align-self-top mr-3 img-rounded img-responsive" src="{{$user->image->location}}" alt="Generic placeholder image">
                <div class="media-body">

                  <br />

                  <div class="form-group col-10">
                    <input id="name" type="text" class="form-control" name="name" placeholder="name" value="{{$user->name}}">
                  </div>

                  <div class="form-group col-10">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" >
                  </div>

                  <div class="form-group col-10">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                  </div>

                  <div class="form-group col-10">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
                  </div>


                </div>
              </div>




                  <button type="submit" class="btn btn-outline-secondary offset-sm-8"> Save</button>



            </form>

        </div>

    </div>
  </div>
  </div>
</div>
