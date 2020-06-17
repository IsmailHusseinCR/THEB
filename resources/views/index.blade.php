

@extends('layouts.main')

@section('content')

    {{-- @foreach ($categories->chunk(3) as $chunk)
       @foreach ($chunk as $item)
          <pre>{{ $item }}</pre>
       @endforeach
    @endforeach --}}


    <div class="w-100 px-4 pt-16 bg-blue-700">
            <div class="flex flex-col">
                <div class="h-64 px-30 py-30 text-center text-white font-semibold">
                    <h1 class="pt-20 text-5xl">Search your keyword here</h1>
                    <form action="/search" method="get" class="text-center">
                        <div class="flex m-auto  text-center  border-b border-b-2 border-teal-500 py-2 w-1/3 ">
                          <input type="search" name="search" class="appearance-none bg-transparent border-none w-full text-black-700  leading-tight focus:outline-none" type="text" placeholder="Like coronavirus" aria-label="Full name">
                          <button type="submit"  class="flex bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text- border-4 text-white py-1 px-2 rounded" type="button">
                         Search
                          </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

            {{-- Sectie why TBC--}}
            <div class="w-100 px-4 pt-16 pb-20 flex flex-col ">
              <h1 class="justify-center m-auto text-blue-700 font-semibold pb-3 text-2xl">Why The Business Counter?<h1>

                <div class="w-100 flex justify-between">
                 <div class="flex flex-col">
                  <i class="fas fa-coins fa-4x text-center"></i>
                  <p class="font-bold text-2xl">Save money by calculating your profits</p>
                  <p class="font-semibold text-lg">Machine learning powered calculations to not make mistakes</p>
                 </div>

                 <div class="flex flex-col">
                  <i class="fas fa-clock fa-4x text-center"></i>
                  <p class="font-bold text-2xl">Set a timer to fill in the VAT deductions</p>
                  <p class="font-semibold text-lg">Don't get fined by getting notifications of The Business Counter</p>
                 </div>

                 <div class="flex flex-col">
                  <i class="fab fa-gratipay fa-4x text-center"></i>
                  <p class="font-bold text-2xl">Recieve handy tips to boost your business</p>
                  <p class="font-semibold text-lg">Always get the latest tips on this platform </p>
                 </div>
                 
                </div>
  
            </div>
        
          <div class="w-100 px-4 pt-16 flex flex-col bg-gray-200 ">
            <div class="w-100 flex ">
              <div class="flex flex-col">
                <img src="https://cdn.pixabay.com/photo/2018/01/21/06/13/laptop-3095916_960_720.png" alt="" srcset="">
              </div>

              <div class="flex flex-col items-center flex-grow justify-center ">
                <h2 class="font-bold text-5xl text-blue-700">Convenient and simple</h2>
                <p class="font-semibold text-2xl text-blue-700">Register, Calculate and you're done</p>
              </div>
          </div>
          <div class="w-100 flex ">
            <div class="flex flex-col items-center flex-grow justify-center">
              <h2 class="font-bold text-5xl text-blue-700">No longer fiscal jargon</h2>
              <p class="font-semibold text-2xl text-blue-700">Register, Calculate and you're done</p>
            </div>

            <div class="flex flex-col items-center flex-grow  ">
              {{-- <img src="../../img/mobile.png" alt="" srcset=""> --}}
              <img src='https://www.mupload.nl/img/uxcgj738qjhmp.png'>
            </div>
        </div>
          </div>


    <div class="w-100 px-4 pt-16 ">
      <h1 class="text-5xl text-center pb-8 text-blue-700">Select a category</h1>
        <div class="w-100 flex justify-between h-60 mb-10 text-blue-700 font-semibold">
            @foreach ($categories->chunk(3) as $chunk)
            <div class="flex flex-col">
                @foreach ($chunk as $category)
            <p class="pb-4 text-3xl"><a href="test/{{$category->id}}">{{$category->title}}</a> <i class="fas fa-user pl-3"></i></p>
                @endforeach
            </div>  
            @endforeach

      </div>
    </div>

    {{-- <div class="w-100 px-4 pt-16 bg-gray">
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
                  
            </div> --}}
                 
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
