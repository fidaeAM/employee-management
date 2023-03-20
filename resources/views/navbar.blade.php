@extends('layouts.app')

@section('content')


<div class="container mx-ms-3">
  <form action="{{ route('emp.store') }}" method="POST">
    @csrf
    <div class="grid grid-cols-4 gap-2 mx-sm-2">
      <div class="form-group mx-sm-3 mb-3">
        <input type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-1
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
          aria-describedby="emailHelp123" placeholder="Name" name="name"> <br>
      </div>
      <div class="form-group mx-sm-3 mb-3">
        <input type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-1
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
          aria-describedby="emailHelp124" placeholder="Age" name="age"> <br>
      </div>

      <div class="form-group mx-sm-3 mb-3">
        <input type="email" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-200
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-1
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
          placeholder="Email address" name="email"> <br>
      </div>

      <div class="form-group mx-sm-3 mb-3">
        <input type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-1
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
          aria-describedby="emailHelp124" placeholder="Poste" name="poste"> <br>
      </div>
      <div class="form-group mx-sm-3 mb-3">
        <input type="text" class="form-control
          block
          w-full
          px-0
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-1
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
          aria-describedby="emailHelp124" placeholder="Salaire" name="salaire"> <br>
      </div>
    </div>
   
    <button type='submit'  class=" btn btn-primary inline-flex items-center px-4 py-2 bg-black-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3" id="submit-button">Valider </button>
  </form>
</div>


@endsection