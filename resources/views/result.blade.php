@extends('layouts.main')

@section('content')

<style>
    .wrapper {
    width: 100px; /* Set the size of the progress bar */
    height: 100px;
    position: absolute; /* Enable clipping */
    clip: rect(0px, 100px, 100px, 50px); /* Hide half of the progress bar */
  }
  /* Set the sizes of the elements that make up the progress bar */
  .circle {
      display: flex;
      justify-content: center;
    width: 80px;
    height: 80px;
    border: 10px solid purple;
    border-radius: 50px;
    position: absolute;
    clip: rect(0px, 50px, 100px, 0px);
  }
  /* Using the data attributes for the animation selectors. */
  /* Base settings for all animated elements */
  div[data-anim~=base] {
    -webkit-animation-iteration-count: 1;  /* Only run once */
    -webkit-animation-fill-mode: forwards; /* Hold the last keyframe */
    -webkit-animation-timing-function:linear; /* Linear animation */
  }
  
  .wrapper[data-anim~=wrapper] {
    -webkit-animation-duration: 0.01s; /* Complete keyframes asap */
    -webkit-animation-delay: 3s; /* Wait half of the animation */
    -webkit-animation-name: close-wrapper; /* Keyframes name */
  }
  
  .circle[data-anim~=left] {
    -webkit-animation-duration: 6s; /* Full animation time */
    -webkit-animation-name: left-spin;
  }
  
  .circle[data-anim~=right] {
    -webkit-animation-duration: 3s; /* Half animation time */
    -webkit-animation-name: right-spin;
  }
  /* Rotate the right side of the progress bar from 0 to 180 degrees */
  @-webkit-keyframes right-spin {
    from {
      -webkit-transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(180deg);
    }
  }
  /* Rotate the left side of the progress bar from 0 to 360 degrees */
  @-webkit-keyframes left-spin {
    from {
      -webkit-transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
    }
  }
  /* Set the wrapper clip to auto, effectively removing the clip */
  @-webkit-keyframes close-wrapper {
    to {
      clip: rect(auto, auto, auto, auto);
    }
  }
</style>
<div class="w-100 px-4 pt-16 bg-purple-700">
    <div class="flex flex-col">
        <div class="h-64 px-30 py-30 text-center text-white font-semibold">
        <h1 class="pt-20 text-5xl">Welcome to your custom calculations, please answer the questions below</h1>
        </div>
    </div>
</div>

<div class="w-100 px-4 pt-16 pb-20 flex flex-col ">
    <div class="w-100 m-20 flex-col justify-center">
     <div class="flex flex-col justify-center align-center p-12">
      <p class="font-bold text-2xl">Please be patient for a moment, the AI will choose the right calculation aid according to your situation</p>
     </div>

     <div class="flex flex-col justify-center p-12">
        <div class="wrapper" data-anim="base wrapper">
            <div class="circle" data-anim="base left"></div>
            <div class="circle" data-anim="base right"></div>
          </div>
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

<script async>
    if(document.readyState === 'ready' || document.readyState === 'complete') {
  aiState();
} else {
  document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        aiState();
    }
  }
}

    function aiState(){
        setInterval(() => {
            window.location.href = "/ai"; 
        }, 8000);
    }
</script>