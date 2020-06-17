@extends('layouts.main')

@section('content')

<div class="w-100 px-4 pt-16 bg-blue-700">
    <div class="flex flex-col">
        <div class="h-64 px-30 py-30 text-center text-white font-semibold">
        <h1 class="pt-20 text-5xl">Welcome, {{Auth::user()->name}}!</h1>
        </div>
    </div>
</div>

<div class="w-100 px-4 pt-16 pb-20 flex flex-col ">
      <div class="w-100 m-20 flex justify-between">
       <div class="flex flex-col bg-blue-700 justify-center p-12">
        <p class="font-bold text-2xl">My yearly profit</p>
       <p class="font-semibold text-lg">€{{Auth::user()->year_profits}}</p>
       </div>

       <div class="flex flex-col bg-blue-700 justify-center p-12">
        <p class="font-bold text-2xl">Check my calculations</p>
        <a href="/calculations">
        <button class="flex bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text- border-4 text-white py-1 px-2 rounded" type="button">
            Search
        </button>
        </a>
       </div>


       
      </div>

  </div>

  <div class="w-100 px-4 pt-16 bg-blue-500">
    <div class="w-100 flex justify-between">
      <div class="flex flex-col">
       <p class="font-bold text-3xl">Not found what you are searching for?</p>
       <p class="font-semibold text-lg">Call us at +31684429630</p>
      </div>

      <div class="flex flex-col">
       <p>Or email us ihussein@tbc.com</p>
      </div>

     </div>
  </div>
@endsection
 {{-- {{dd(Auth::user()->year_profits)}} --}}
