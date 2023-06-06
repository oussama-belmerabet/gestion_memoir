@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
])
@section('content')



<form class="col-md-12" action="/create-em" method="POST">
  @csrf
  <div class="card">
    <div class="card-header bottom-9 top-28">
        <h5 class="title">{{ __('  .........  ') }}</h5>
    </div>
    <div class="card-body  mt-10">
        <div class="row">
              <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="name" required>
                  </div>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" style="display: block;" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="row">
            <div class="col-md-9">
                <div class="form-group">

                    <input type="text" name="email" placeholder="email" required>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
                <div class="form-group">

                  <input type="password" name="password" placeholder="Password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
                <div class="form-group">

                  <input type="text" name="nom" placeholder="Nom" required>
                </div>
                @if ($errors->has('nom'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                @endif
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
                <div class="form-group">

                  <input type="text" name="prenom" placeholder="Prenom" required>
                </div>
                @if ($errors->has('prenom'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('prenom') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
                <div class="form-group">

                  <input type="text" name="spécialité" placeholder="Specialité" required>
                </div>
                @if ($errors->has('spécialité'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('spécialité') }}</strong>
                    </span>
                @endif
            </div>
          </div>



</div>
<div class="card-footer ">
    <div class="row">
        <div class="col-md-12 text-center">
          <button class="btn btn-info btn-round" type="submit">Create EM Account</button>
        </div>
    </div>
</div>
</div>
</form>




@endsection