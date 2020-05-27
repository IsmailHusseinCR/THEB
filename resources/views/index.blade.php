

@extends('layouts.main')

@section('content')

    {{-- @foreach ($categories->chunk(3) as $chunk)
       @foreach ($chunk as $item)
          <pre>{{ $item }}</pre>
       @endforeach
    @endforeach --}}

    <div class="w-100 px-4 pt-16 bg-red-700">
            <div class="flex flex-col">
                <div class="h-64 px-30 py-30 text-center text-white font-semibold">
                    <!-- Hier komt form action search. Search met name=q en die get query handel ik af. --->
               
                    <h1 class="pt-20 text-5xl">Search your keyword here</h1>
                    {{-- <p>Like coronavirus</p> --}}
                    {{-- <form action="/search" method="get">
                        <input class='text-red-700' name="infosearch" id="infosearch" cols="30" rows="10">
                        <button type="submit" name="search" value="search" class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                    </form> --}}
                    <form action="/search" method="get" class="text-center">
                        <div class="flex items-center border-b border-b-2 border-teal-500 py-2 ">
                          <input type="search" name="search" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Like coronavirus" aria-label="Full name">
                          <button type="submit"  class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                         Search
                          </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

{{-- TRY A FIX FOR FA ICONS --}}
    <div class="w-100 px-4 pt-16">
        <div class="container flex justify-between h-60 mb-10 text-red-700 font-semibold">
            @foreach ($categories->chunk(3) as $chunk)
                
            <div class="flex flex-col">
                @foreach ($chunk as $category)
    
            <p class="pb-4 text-3xl"><a href="test/{{$category->id}}">{{$category->title}}</a> <i class="fas fa-user pl-3"></i></p>
                @endforeach
 
                {{-- <p class="pb-4 text-3xl">Freelance deduction <i class="fas fa-user-tie pl-3"></i></p>
                <p class="pb-4 text-3xl">Tax Return <i class="fas fa-hand-holding-usd pl-3"></i></p> --}}
            </div>  
            @endforeach
            {{-- <div class="flex flex-col">
                <p class="pb-4 text-3xl">Brexit <i class="fas fa-pound-sign pl-3"></i></p>
                <p class="pb-4 text-3xl">Business profit exemption <i class="fas fa-suitcase pl-3"></i></p>
                <p class="pb-4 text-3xl">VAT deduction <i class="fas fa-landmark pl-3"></i></p>
            </div>  
        </div> --}}

    </div>
    <div class="w-100 px-4 pt-16 bg-gray">
        <h1 class="text-4xl text-center"> Tips</h1>
            <div class="flex flex-row justify-between ">
            
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://lh3.googleusercontent.com/proxy/Skpvfa-TesTpTuEwAJ7BCznGq9ZD6U2vwEVr3eiT1ALhVKy_gU7eK15URvQIydPDHIyucwCF9wjOrJz1kPPgxpGASh8-U8rHDAlwAIikKbr3-BpBekiqjo8btbDq45c2bOPJC4hsUxMNhvRj7gbvVS0SNw" width="800" height="487" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">Don't forget your VAT declaration</div>
                      <p class="text-gray-700 text-base">
                        With THEB you can set a timer for three months. This way you won't forget
                      </p>
                    </div>
                    <div class="px-6 py-4">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#VAT</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#Timer</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#nomorefines</span>
                    </div>
                  </div>

                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://lh3.googleusercontent.com/proxy/Skpvfa-TesTpTuEwAJ7BCznGq9ZD6U2vwEVr3eiT1ALhVKy_gU7eK15URvQIydPDHIyucwCF9wjOrJz1kPPgxpGASh8-U8rHDAlwAIikKbr3-BpBekiqjo8btbDq45c2bOPJC4hsUxMNhvRj7gbvVS0SNw" width="800" height="487" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 py-4">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                    </div>
                  </div>
                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="https://lh3.googleusercontent.com/proxy/Skpvfa-TesTpTuEwAJ7BCznGq9ZD6U2vwEVr3eiT1ALhVKy_gU7eK15URvQIydPDHIyucwCF9wjOrJz1kPPgxpGASh8-U8rHDAlwAIikKbr3-BpBekiqjo8btbDq45c2bOPJC4hsUxMNhvRj7gbvVS0SNw" width="800" height="487" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 py-4">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                    </div>
                  </div>
                  
            </div>
                 
  
    {{-- TIPS SECTION (LIKE JURIDISCH LOKET--}}
    {{-- <div class="w-100 px-4 pt-16 bg-black">
        <div class="container flex justify-between">
            <div class="flex flex-col">
                
                <p><a href="/search/1">Starters deduction </a></p>
                <p>Freelance deduction</p>
                <p>Tax Return</p>
            </div> 
    </div> --}}
    
@endsection
