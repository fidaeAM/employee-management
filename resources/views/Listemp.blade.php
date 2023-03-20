@extends('layouts.app')


@section('content')

@vite('resources/js/app.js')

<div class="container">

  <div class="row row-cols-1 row-cols-md-4 g-4">

@foreach ($employees as $employee)
        
    @csrf
    
                 
                      <div class="col">

                  <div class="card" style="width: 20rem; flex flex-wrap:5px;">
                      <div class="card-body">
                     <h5 class="card-title">Name :{{$employee->name}}</h5>
                        <p class="card-text">Poste : {{$employee->poste}}</p>
                        <p class="card-text">Salaire :{{$employee->salaire}}</p>
                        <a href="/employee/{{$employee->id}}" class="btn btn-primary">Show Employee</a>
                        <a href="/employee/del/{{$employee->id}}" class="btn btn-danger btn-sl">Delete</a>

                      </div>
                    </div> <br>
                  </div>
                    
@endforeach
   
</div>
</div>


@endsection