@extends('layouts.main')
@section('content')
<div class="w-100 px-4 pt-16 bg-red-700">
    <div class="flex flex-col">
        <div class="h-64 px-30 py-30 text-center text-white font-semibold">
            <h1 class="pt-20 text-5xl">{{$categories->title}}</h1>
        </div>
    </div>
</div>

@endsection

<script src="//unpkg.com/brain.js"></script>
<script>

// TODO: LEES DE URL UIT de search en stop die in querystring. Machinelearnng moet overeen komen me de trainingsdata die ik heb

// Feedback- Hoe ga ik beter implementeren. 
// Mocht ik een beter idee hebben delen met Nathalie


// Hoe ga ik dit gebruiken

// Misschien gebruiken met rekenhulp 

// window.onload = function(){
//     const trainingdata = [
//     'Coronavirus',
//     'VAT',
//     'Brexit is going to happen on 31 December',
//     'Tax return mostly happpens every 3 months',
//     'Starters most likely are able to use starters deduction',
// ]

// const network = new brain.recurrent.LSTM();

// network.train(trainingdata, {
//     iterations: 1000,
//     log: stats => {
//         console.log(stats)
//     }
// })
// const queryString = 'Brexit'
// console.log(queryString + network.run(queryString)) 
// }


</script>