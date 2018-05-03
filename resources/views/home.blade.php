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
                            <div class="col">  <h2>Benvenuto {{ Auth::user()->name }}</h2> </div>
                              
                                
                            <div class="col">
                                </div>

                            <div class="col"> 
                                
                                <img style="width: 300px; height: 80px" src="img/Mercedes-F12017.jpg" alt="Merceses F1 2017 di Dominy"></div>
                        </div>
                    </div>

<br><br><br>



<div class="container">
    <div class="row">
        <div class="col"></div>


        <div class="col-8"><table class="table">
    <B>STATISTICHE PILOTA: SEASON 1</B>

 <thead> 
    <tr>
    <th scope="col">Dominy</th>
    <th scope="col">Giri Veloci</th> 
    <th scope="col">Gare Vinte</th>
    <th scope="col">Pole Positions</th>
    <th scope="col">Numero Gare Corse</th> 
    <th scope="col">Piazzamento Finale in Campionato</th> 
    <th scope="col">Migliore Posizionamento in Gara</th>
  </tr>
</thead>
  <tbody>
    <tr >
      <td>Dominy</td>
      <td>1</td>
      <td>0</td>
      <td>0</td>
      <td>9</td>
      <td>11th</td>
      <td>5th</td>
    </tr>
    
  </tbody>


</table></div>

        
        <div class="col"></div>
    </div>
</div>
    
                   
                </div>
            </div>
        </div>
    </div>
</div>









@endsection
