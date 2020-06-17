@extends('layouts.main')
@section('content')
<div class="w-100   bg-purple-700">
    <div class="flex flex-col">
        <div class="h-64 px-30 py-30 text-center text-white font-semibold">
        <h1 class="pt-20 text-3xl">Welcome to your custom calculations, please answer the questions below</h1>
        </div>
    </div>
</div>

<div class="w-100 px-4 pt-16 pb-20 flex flex-col ">
    <h1 class="justify-center m-auto text-blue-700 font-semibold pb-3 text-2xl">What is your function?<h1>

      <div class="w-100 flex justify-center">
       <div class="flex flex-col pl-3 pt-12">
        {{-- <button class="flex bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text- border-4 text-white py-1 px-2 rounded" type="button">
            Search
        </button> --}}
        <form action="/calculations/{name}">
        
            <button type="submit" name="freelancer" value="freelancer" class="flex bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text- border-4 text-white py-1 px-2 rounded" type="button">
                Freelancer
            </button>
        </form>
       </div>

       <div class="flex flex-col pl-20 pt-12">
        <form action="/calculations/{name}">
        
            <button type="submit" name="employed" value="employed" class="flex bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text- border-4 text-white py-1 px-2 rounded" type="button">
                Employed
            </button>
        </form>
       </div>

       
      </div>

  </div>
@endsection

