@extends('layouts.app')

@section('content')


<div class="container">

    
   

    @foreach ($emps as $emp)
 
   
    
<form  action="{{route('emp.update',$emp->id)}}" method="POST">
   

    @csrf
 <div class="grid grid-cols-2 gap-4">
    <div class="form-group mb-3">
    
    <div class="mb-3">
        <label>ID</label>
          <labe scope="row">{{$emp->id}}</label> <br>
          </div>
          <div class="mb-3">
            <label >Name :  </label>
          <input  class="form-control"  name="name" value="{{$emp->name}}" /> <br> 
          </div>

          <div class="mb-3">
            <label> Age :</label>
            <input   class="form-control"  name="age" value="{{$emp->age}}"  />  <br>

          </div>

          <div class="mb-3">
            <label>Email : </label>
           <input  class="form-control"   name="email" value="{{$emp->email}}"  />  <br>

          </div>

          <div class="mb-3">
            <label>Poste :</label>
          <input  class="form-control"  name="poste" value="{{$emp->poste}}"   />  <br>
          </div>

          <div class="mb-3">
            <label>Salaire : </label>
          <input class="form-control"   name="salaire" value="{{$emp->salaire}}"  /> <br>
          </div>
         
          <button type='submit'  class="btn btn-secondry border 20px " >Valider </button>
          @endforeach

        
        </form>
</div>
</div>

</div>


@endsection