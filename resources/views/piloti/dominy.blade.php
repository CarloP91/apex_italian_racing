@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>STATISTICHE NOME PILOTA</b></div>

                <div class="card-body">
                 
                	<div class="container">
                		<div class="row">
                			<div class="col"><b>NOME DEL PILOTA: </b>{{$drivers[0]->name_driver}}
                 <br></div>



                			<div class="col"><b>AUTO ATTUALE: </b> <br><img src="{{$drivers[0]->img_url_auto}}" style="width: 200px; height: 50px"></div>



                			<div class="col"><b>PALMARES:</b></div>
                		</div>
                	</div>

                 
                 








                 </div>


@endsection