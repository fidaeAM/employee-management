

@extends('layouts.app')

@section('content')

@vite('resources/js/app.js')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>


@media only screen and (max-width:400px){

   body{
    background-color: purple;
   
    
   }
   .FA-container .FA-row-padding{
    display:block;
    width: 100%;

   }
   .card m-10 bg-danger{
   
    
   }

   .FA-col-third{
    padding: 0 0px 10px 0; 
    width: 98%;
    border-radius: 25%;
    
   }

   

   
}
@media only screen and (max-width:750px) {

    .sidenav{
        display:none;
    }
    body{

        padding: 0% ; 
        margin:0% ; 
        position:fixed;
        width:100%;
    }

    .FA-row-padding{
        display:inline-block;
    }
    .FA-col-third {

        padding:8px 8px 8px 8px;
    }
    
}

.FA-col-third{
    padding:8px 8px 8px 8px;
    border-radius: 25%;
    
    
    
   }

#myChart{
    text-align: center;
    width: 10px;
    height: 10px;
    padding: 8px;
}
.container{
        width:100%;
        text-align: center;
       
}

.FA-row-padding{
    display:flex; 
    
}

.nav a{
    color: #ddd;
    text-align: center;
    width: 5cm;
    height: auto;
    margin: 20px 10px 20px 0px ; 
    
    text-decoration: none;

}
a:hover{
    background-color: purple;
    
}
.nav img{
    margin-bottom: 20px;
    margin-left: 20px;
    width: 100px;
    height: auto;
    border-radius: 25%;
    border-block-color: #ffffff;
    border-block-end: solid;
    

}
    </style>
   
</head>

<body>

<div class="container bg-transparent w3-hide-large" style="align-content: center; padding:5%; margin:1%">

   

<div class="sidenav" style="

position:fixed;
z-index: 1;
top: 55px;
left: 0px;
height: 100%;
width: 200px;
float: left;
background-color:hsla(0, 100%, 1%, 0.778);
overflow-x: hidden;
padding-top: 20px;
padding-bottom: 400px;


 
">




<div style="width: 250px;" >
 
    <nav class="nav" style="text-align: center;" >
        <img src="/images/test.jpeg"/> 

        <div class="row" style="margin:3px; padding: 3px ">
        <a href="/emp/register" class="col-lg-5 col-sm-6 text-decoration-none text-success pb-2">Add Employee </a>
    
                              <a href="/employee" class="col-sm-5 col-md-6 text-decoration-none text-success">List of Employee</a>
                              <div class="w-100"></div>
                            
                               <a href="/employee/update" class="col-sm-5 col-md-6text-text-gray-600  hover:cursor-pointer hover:text-indigo-900 p-0.5">Update Employee</a> 
                               <div class="w-100"></div>

                               <a href="/employee/update" class="col-sm-5 col-md-6   hover:cursor-pointer hover:text-indigo-900 p-0.5">Update Employee</a> 
                               <div class="w-100"></div>
                              <a href="/contact" class="col-6 col-sm-3">Contact</a>
                              <div class="w-100"></div>
        </div>
                            </nav>
</div>

</div>

    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; float:right;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<p class="fs-3"> 
                    Hello Mr {{ Auth::guard('admin')->user()->name}}

</p>
                
@csrf

<div class="FA-container">

    <div class="FA-row-padding">

       
    
 
    @if(@isset($coun))
    <div class="FA-col-third">

        <div class="card m-10 bg-danger">
            <div class="card-body mx-auto float-sm-left">

                <h4 style="text-align: center">Nombre d'employee </h4>
                <h1 style="text-align: center">{{$coun}}</h1>
            </div>
        </div>

</div>
@endisset
     




@if(@isset($total))
<div class="FA-col-third">

    <div class="card mx-10 bg-danger">
        <div class="card-body  float-sm-right  ">

            <h4 style="text-align: center">La Somme des salaires </h4>


            @php
             //setlocale(LC_MONETARY,"de_DE");
             $money =  number_format($total,2);
             
            @endphp
            <h1 style="text-align: center">{{$money.'MAD'}}</h1>


        </div>
    </div>

</div>
@endisset










</div>

  
                </div>

                <div class="FDD-container">

                    <canvas id="myChart"></canvas>
                    
                </div>

                <div class="FDDD-container">

                    <canvas id="myCharte"></canvas>
                </div>
                    
                    
                    
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: {!! json_encode($label) !!},
                                datasets: [{
                                    label: 'Salaires des employés',
                                    data: {!! json_encode($salary) !!},
                                    backgroundColor: [

                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 99, 132,0.2)',
                                    'rgb(255, 205, 86,0.2)'
                                    ],
                                  
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>


<script>
    var ctx = document.getElementById('myCharte').getContext('2d');
    var myCharte = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($post) !!},
            datasets: [{
                label: 'Nombre des employees par rapport au poste ',
                data: {!! json_encode($po) !!},
                backgroundColor: [

                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132,0.2)',
                'rgb(255, 205, 86,0.2)'
                ],
              
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</div>
</body>
