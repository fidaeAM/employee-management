@extends('layouts.app')

@section('content')

<div class="container">
        <table class="table table-striped">

                @php
    $totalsalaire = 0;
@endphp
                                <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Poste</th>
                                        <th scope="col">Salaire</th>
                                        </tr>
                                </thead>
                                @foreach($emp as $em)
                                <tbody>
                                        <tr>
                                            <th scope="row">{{$em->id}}</th>
                                            <td>{{$em->name}}</td>
                                            <td>{{$em->age}}</td>
                                            <td>{{$em->email}}</td>
                                            <td>{{$em->poste}}</td>
                                            <td>{{$em->salaire}}</td>
                                        </tr>
                                       
                                </tbody>


                                @php
                                    
                               
                                         $totalsalaire = $totalsalaire + $em->salaire ;
                                         @endphp
                                @endforeach

                                
                               <p>{{$totalsalaire}}</p>

                               
        </table>
</div>
<div class="container">
      <button  class="btn btn-primary position-relative">  Nombre of Employee 


        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{count($emp)}} 
            <span class="visually-hidden">unread messages</span>
      </button>
       

</div>

@endsection