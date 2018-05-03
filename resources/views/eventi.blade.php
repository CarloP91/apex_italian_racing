@extends('layouts.app')



@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">


<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-8-auto"><div class="card text-center">
  <div class="card-header">
    PROSSIMI EVENTI
  </div>
  <div class="card-body">
    <h5 class="card-title">Campionato Classic "AIR"</h5>
    <!--se l'immagine è una: -->
    <img style="width: 500px; height: auto;" src="img/loc_mc_c.jpg" class="img-fluid"> <br><br>
    <!--se le immagini sono due: -->
     <!-- <img style="width: 300px; height: 350px;" src="img/loc_mc_c.jpg"> 
      <img style="width: 300px; height: 350px;" src="img/loc_mc_c.jpg"> <br><br>-->
          


    <a href="/evento_classic_1" class="btn btn-primary">Vedi le News su Facebook</a>
  </div>
  <div class="card-footer text-muted">
    Data di Inizio: 14/05/2017
  </div>
</div></div> 
    <div class="col"></div>
  </div>
</div>



<br><br><br><br>


<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-12"><div class="card text-center">
  <div class="card-header">
    Eventi Passati
  </div>
  <div class="card-body">
    
    <!-- come farlo?-->
   
  </div>
  <div class="card-footer text-muted">
    <!-- inserisci qualcosa nell footer-->
  </div>
</div></div> 
    <div class="col"></div>
  </div>
</div>


@endsection 

