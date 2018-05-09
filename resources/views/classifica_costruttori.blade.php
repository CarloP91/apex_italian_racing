<!DOCTYPE html>
<html>
<head>
    <title>AIR</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">



<div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-8-auto"><a href="/"><img src="img/bann_sw_air2.0.jpg" class="img-fluid" alt="Campionato Apex Italian Racing F1 2018 per PC"></a>

                            <div class="bg-info clearfix">
  <a  class="btn btn-secondary float-left" href="/classifica_costruttori">Campionato Costruttori</a>
  <a  class="btn btn-secondary float-right" href="/classifica_piloti">Campionato Piloti</a>
</div>
  </div>
  
                    <div class="col"></div>
                </div>
            </div>
<br><br>

</head>
<body>

<!--<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8-auto"><iframe style="width:1000px; height: 650px" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQWx1v1toY4vgf4S8LlZeocNCCMmvFE5NdFyBHWrhkDRfeh5agT7N5pehnvMDAq3yRiYNVkhZXo7p71/pubhtml?widget=true&amp;headers=false"></iframe></div>
        <div class="col">
    </div>
</div>-->


<div class="container-fluid" >
  
     


        <div class="col"  >


          
  <table class="table" style="margin-left: 0px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Scuderia</th>
      <th scope="col">Punti Totali</th>
      <th scope="col"><img src="/img/stemmi piste/Australia.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Bahrain.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/China.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Baku.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Spagna.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Monaco.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Canada.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Francia.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Austria.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/UK.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Germania.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Ungheria.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/SPA.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Monza.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Singapore.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Russia.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Japan.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/USA.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Messico.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/Brasile.png" style="height: 20px; width: 30px;"></th>
      <th scope="col"><img src="/img/stemmi piste/EAU.png" style="height: 20px; width: 30px;"></th>
   

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="background-color: gold">1</th>
      <td><!--img scuderia--><img src="{{$drivers[0]->img_url_auto}}" style="width: 200px; height: 50px"></td>
      <td><!--punti totali--> 
       {{$pt = $drivers[1]->australia + $drivers[0]->australia + 
                $drivers[1]->bahrain + $drivers[0]->bahrain}} </td></td>
      
      <td>{{$drivers[0]->australia}}</td>
      <td>{{$drivers[0]->bahrain}}</td>
      <td>{{$drivers[0]->china}}</td>
      <td>{{$drivers[0]->baku}}</td>
      <td>{{$drivers[0]->spagna}}</td>
      <td>{{$drivers[0]->monaco}}</td>
      <td>{{$drivers[0]->canada}}</td>
      <td>{{$drivers[0]->francia}}</td>
      <td>{{$drivers[0]->austria}}</td>
      <td>{{$drivers[0]->uk}}</td>
      <td>{{$drivers[0]->germania}}</td>
      <td>{{$drivers[0]->ungheria}}</td>
      <td>{{$drivers[0]->belgio}}</td>
      <td>{{$drivers[0]->italia}}</td>
      <td>{{$drivers[0]->singapore}}</td>
      <td>{{$drivers[0]->russia}}</td>
      <td>{{$drivers[0]->suzuka}}</td>
      <td>{{$drivers[0]->usa}}</td>
      <td>{{$drivers[0]->messico}}</td>
      <td>{{$drivers[0]->brasile}}</td>
      <td>{{$drivers[0]->eau}}</td>

    </tr>

    <tr>
      <th scope="row" style="background-color: silver">2</th>
      <td><!--img scuderia--><img src="{{$drivers[1]->img_url_auto}}" style="width: 210px; height: 50px"></td>
      <td><!--punti totali--> 
        {{$pt = $drivers[1]->australia + $drivers[0]->australia + 
                $drivers[1]->bahrain + $drivers[0]->bahrain}} </td></td>
      
      <td>{{$drivers[1]->australia + $drivers[0]->australia}} </td>
      <td>{{$drivers[1]->bahrain}}</td>
      <td>{{$drivers[1]->china}}</td>
      <td>{{$drivers[1]->baku}}</td>
      <td>{{$drivers[1]->spagna}}</td>
      <td>{{$drivers[1]->monaco}}</td>
      <td>{{$drivers[1]->canada}}</td>
      <td>{{$drivers[1]->francia}}</td>
      <td>{{$drivers[1]->austria}}</td>
      <td>{{$drivers[1]->uk}}</td>
      <td>{{$drivers[1]->germania}}</td>
      <td>{{$drivers[1]->ungheria}}</td>
      <td>{{$drivers[1]->belgio}}</td>
      <td>{{$drivers[1]->italia}}</td>
      <td>{{$drivers[1]->singapore}}</td>
      <td>{{$drivers[1]->russia}}</td>
      <td>{{$drivers[1]->suzuka}}</td>
      <td>{{$drivers[1]->usa}}</td>
      <td>{{$drivers[1]->messico}}</td>
      <td>{{$drivers[1]->brasile}}</td>
      <td>{{$drivers[1]->eau}}</td>
      
    </tr>

    <tr>
      <th scope="row" style="background-color: #cd7f32">3</th>
      <td><!--img scuderia--><img src="{{$drivers[2]->img_url_auto}}" style="width: 200px; height: 50px"></td>
      <td><!--punti totali--> {{$pt = $drivers[2]->australia + $drivers[2]->bahrain}} </td></td>
      
      <td>{{$drivers[2]->australia}}</td>
      <td>{{$drivers[2]->bahrain}}</td>
      <td>{{$drivers[2]->china}}</td>
      <td>{{$drivers[2]->baku}}</td>
      <td>{{$drivers[2]->spagna}}</td>
      <td>{{$drivers[2]->monaco}}</td>
      <td>{{$drivers[2]->canada}}</td>
      <td>{{$drivers[2]->francia}}</td>
      <td>{{$drivers[2]->austria}}</td>
      <td>{{$drivers[2]->uk}}</td>
      <td>{{$drivers[2]->germania}}</td>
      <td>{{$drivers[2]->ungheria}}</td>
      <td>{{$drivers[2]->belgio}}</td>
      <td>{{$drivers[2]->italia}}</td>
      <td>{{$drivers[2]->singapore}}</td>
      <td>{{$drivers[2]->russia}}</td>
      <td>{{$drivers[2]->suzuka}}</td>
      <td>{{$drivers[2]->usa}}</td>
      <td>{{$drivers[2]->messico}}</td>
      <td>{{$drivers[2]->brasile}}</td>
      <td>{{$drivers[2]->eau}}</td>
      
    </tr>

   
  </tbody>
</table>

       

    </div>


</div>

</body>
</html>
