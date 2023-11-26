@extends('layout.nav')
@section('content')
@section('title','Dashboard')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/weather.css')}}">
    <div class="wrapper">
      <div class="sidebar">
        <div>
          <form class="search" id="search">
            <input type="text" id="query" placeholder="Search..." />
            <button><i class="fa fa-search"></i></button>
          </form>
          <div class="weather-icon">
            <img id="icon" src="{{asset('public/css/sun.png')}}" alt="" />
          </div>
          <div class="temperature">
            <h1 id="temp"><span id="setTemp">1</span></h1>
            <span class="temp-unit">°C</span>
          </div>
          <div class="date-time">
            <p id="date-time">Monday, 12:00</p>
          </div>
          <div class="divider"></div>
          <div class="condition-rain">
            <div class="condition">
              <i class="fa fa-cloud"></i>
              <p id="condition">condition</p>
            </div>
            <div class="rain">
              <i class="fa fa-tint"></i>
              <p id="rain">perc - 0%</p>
            </div>
          </div>
        </div>
        <div class="location">
          <div class="location-icon">
            <i class="fa fa-map-marker fa-2x"></i>
          </div>
          <div class="location-text">
            <p id="location">location</p>
          </div>
        </div>
      </div>
      <div class="main">
        <nav>
          <ul class="options">
            <button class="hourly">today</button>
            <button class="week active">week</button>
          </ul>
          <ul class="options units">
            <button class="celcius active">°C</button>
            <button class="fahrenheit">°F</button>
          </ul>
        </nav>
        <div class="cards" id="weather-cards"></div>
        <div class="highlights">
          <h2 class="heading">today's highlights</h2>
          <div class="cards">
            <div class="card2">
              <h4 class="card-heading">Feels Like</h4>
              <div class="content">
                <p class="uv-index" id="feelsLike">0</p>
              </div>
            </div>
            <div class="card2">
              <h4 class="card-heading">Wind Status</h4>
              <div class="content">
                <p class="wind-speed">0</p>
                <p>km/h</p>
              </div>
            </div>
            <div class="card2">
              <h4 class="card-heading">Sunrise & Sunset</h4>
              <div class="content">
                <p class="sun-rise">0</p>
                <p class="sun-set">0</p>
              </div>
            </div>
            <div class="card2">
              <h4 class="card-heading">Humidity</h4>
              <div class="content">
                <p class="humidity">0</p>
                <p class="humidity-status">Normal</p>
              </div>
            </div>
            <div class="card2">
              <h4 class="card-heading">Visibility</h4>
              <div class="content">
                <p class="visibilty">0</p>
                <p class="visibilty-status">Normal</p>
              </div>
            </div>
            <div class="card2">
              <h4 class="card-heading">Air Quality</h4>
              <div class="content">
                <p class="air-quality">0</p>
                <p class="air-quality-status">Normal</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
<script type="text/javascript" src="{{asset('public/css/weather.js')}}"></script>
<script>
	$(document).ready(function(){
		 $.ajax({
               type:'GET',
               url:'{{route('getInformation')}}',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
               	var persed =JSON.parse(data);
               	document.getElementById('setTemp').innerHTML=Math.round(persed.list[0].main.temp);
               	document.getElementById('feelsLike').innerHTML=Math.round(persed.list[0].main.feels_like);
               	document.getElementById('rain').innerHTML=persed.list[0].clouds.all+' %';
               	document.getElementById('location').innerHTML=persed.city.name+' , '+persed.city.country;
               	document.getElementById('condition').innerHTML=persed.list[0].weather[0].description;
               	$('.wind-speed').html(Math.round(persed.list[0].wind.speed *3.6));
               	$('.humidity').html(Math.round(persed.list[0].main.humidity));
               	$('.visibilty').html(Math.round(persed.list[0].visibility /1000)+'  Km');
                console.log(persed)
               }
            });

	});
</script>
@endsection
