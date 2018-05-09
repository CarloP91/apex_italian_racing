@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row">
		<div class="col"></div>


		<div style="padding: 10px; border: solid powderblue 10px" class="col-8-auto">

			<p><b>Iscrizione Piloti</b></p>
			<hr>

			<!--inizio form-->

				<form action="{{ route('driver.create')}}" method="POST" enctype="multipart/form-data">
			  @csrf
			  <div class="form-group">
			    <label for="drive_namefield">Nome Pilota</label>
			    <input type="text" name="name_driver" class="form-control" id="drive_namefield" placeholder="Inserisci Nome Pilota">
			  </div>
			  <div class="form-group">
			    <label for="driver_img">Immagine Pilota</label>
			     <input type="file" name="img_driver" class="form-control" id="driver_img" placeholder="Inserisci Immagine Pilota">
			  </div>
			<div class="form-group">
			    <label for="url_auto">Immagine Auto</label>
			     <input type="file" name="auto_img" class="form-control" id="auto_img" placeholder="Inserisci Auto">
			  </div>
			   <div class="form-group">
			    <label for="team_namefield">Scuderia</label>
			    <input type="text" name="name_team" class="form-control" id="team_namefield" placeholder="Inserisci Nome Scuderia">
			  </div>


			  <button type="submit" class="btn btn-primary">Submit</button> 
			</form>

<!--end form-->


</div>



		<div class="col"></div>
	</div>
</div>

@endsection