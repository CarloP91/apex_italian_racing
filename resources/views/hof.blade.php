@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8"><div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Piloti </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Costruttori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Eventi</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
   

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/286x180_fabiuzz.jpg" class="img-fluid" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Season 1</h5>
    <p class="card-text">Dopo un campionato <b>PAZZESCO</b>, Fabiuzz riesce a prevalere su Wilscos nell'ultima gara di Abu Dhabi, in una lotta all'ultima curva con Gh3gger.</p>
    <a href="#" class="btn btn-primary">Guarda la Scheda</a>
  </div>
</div>


  </div>
</div></div>
        <div class="col"></div>
    </div>
</div>

@endsection