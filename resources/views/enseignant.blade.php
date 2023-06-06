@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
])
@section('content')


  <form class="col-md-12  p-5" action="/create-enseignant" method="POST">
    @csrf
    <div class="card p-5">
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="prenom" placeholder="Prenom" required>
    <input type="text" name="grade" placeholder="Grade" required>
    <input type="text" name="domaine" placeholder="Domaine" required>
    <input type="number" name="année_r" placeholder="Année de recrutement" required>
    <input type="number" name="nbr_sujet" placeholder="Nombre de sujets" required>

    </div><div class="card-footer ">
      <div class="row">
          <div class="col-md-12 text-center">
            <button class="btn btn-info btn-round" type="submit">Create Enseignant Account</button>

          </div>
      </div>
  </div>
  </form>


  @endsection