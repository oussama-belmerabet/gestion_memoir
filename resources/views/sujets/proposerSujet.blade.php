@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
])
@section('content')



<form class="col-md-12  p-5" action="/sujets/propose" method="POST">
    @csrf
    <div class="card p-5">
    <div class="form-group">
      <label for="intitule">Intitulé:</label>
      <input type="text" name="intitulé" id="intitule" class="form-control">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" id="description" class="form-control" rows="5"></textarea>
    </div>


  </div>
  <div class="card-footer ">
    <div class="row">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-info btn-round">Propose Subject</button>
        </div>
    </div>
</div>

  </form>
@endsection