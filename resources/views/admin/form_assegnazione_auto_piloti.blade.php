@extends('layouts.app')

@include('navbar')



<div class="container">
	<div class="row">
		<div class="col"></div>


		<div class="col-8-auto">

			<!--inizio form-->

				<form action="{{ route('auto.create')}}" method="POST" enctype="multipart/form-data">
			  @csrf
			  <div class="form-group">
			    <label for="drive_namefield">Nome Pilota</label>
			    <input type="text" name="driver_name" class="form-control" id="drive_namefield" placeholder="Inserisci Nome Pilota">
			  </div>
			  <div class="form-group">
			    <label for="driver_img">Immagine Pilota</label>
			     <input type="file" name="driver_img" class="form-control" id="driver_img" placeholder="Inserisci Immagine Pilota">
			  </div>
			<div class="form-group">
			    <label for="url_auto">Immagine Auto</label>
			     <input type="file" name="url_auto" class="form-control" id="url_auto" placeholder="Inserisci Auto">
			  </div>


			  <button type="submit" class="btn btn-primary">Submit</button> 
			</form>

<!--end form-->


</div>



		<div class="col"></div>
	</div>
</div>