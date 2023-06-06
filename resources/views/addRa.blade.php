@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
])
@section('content')



<form class="col-md-12  p-5" action="/create-ra" method="POST">
    @csrf
    <div class="card p-5">
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="num_es" placeholder="Enseignant ID" required>
    </div>
  <div class="card-footer ">
    <div class="row">
        <div class="col-md-12 text-center">
          <button class="btn btn-info btn-round" type="submit">Create RA Account</button>
        </div>
    </div>
</div>
</form>


@endsection