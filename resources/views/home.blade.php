@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pannello di Controllo di {{ Auth::user()->name }} -   <a href="/">Torna alla Home</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                        <div class="row">
                            <div class="col">  <h2>Benvenuto {{ Auth::user()->name }}</h2> 

                              
                                </div>
                            <div class="col">
                                </div>

                            <div class="col"> 
            
                             
                                
                                <img style="width: 300px; height: 80px" src="{{ Auth::user()->img_auto_url }}" alt="">
                            <br><p align="center"><b>PROFILO:</b> {{ Auth::user()->tipo_profilo }} {{ Auth::user()->season }} </p>
                        </div>
                        </div>
                    </div>

<br><br><br>





<p><li><a href="/piloti/{{ Auth::user()->name }}">Sei un Pilota? Visita la tua Pagina Personale</a></p></li>
<p><li><a href="/">Se non sei un Pilota, torna alla HomePage e visita la Pagina Piloti e la Classifica</a></p></li>
<p><li><a href="/contatti">Se non sei un pilota ma vorresti diventarlo, <b>CONTATTACI</b></a></li></p>
<p><li>Se sei un pilota ma ancora non risulta, contatta i <b>R</b>esponsabili su <b>W</b>hatsapp o <b>D</b>iscord</li></p>





@endsection
