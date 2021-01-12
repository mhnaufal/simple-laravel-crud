 <!-- NON_ADMIN - SEE ONE OFFER IN DETAILS  -->
 <!-- with BID BUTTON & BACK  -->
 @extends('layouts/layout')

 @section('contents')

 <body>
     <div class="card" style="width: 18rem;">
         <img src="..." class="card-img-top" alt="...">
         <div class="card-body">
             <h4 class="card-title">{{$stockExchange->name}}</h4>
             <p class="card-text">A space exploratory company created by Elon Musk</p>
         </div>
         <ul class="list-group list-group-flush">
             <li class="list-group-item"><strong>Purchase price:</strong> {{$stockExchange->buy}} IDR</li>
             <li class="list-group-item"><strong>Selling price:</strong> {{$stockExchange->sell}} IDR</li>
             <li class="list-group-item"><strong>Available lots:</strong> {{$stockExchange->lot}} </li>
         </ul>
         <div class="card-body">
             <a href="/stocks/index" class="card-link"><button class="btn btn-outline-dark btn-sm">Back</button></a>
             <a href="/stocks/{{ $stockExchange->id}}/edit" class="card-link"><button class="btn btn-outline-warning btn-sm">Edit</button></a>
         </div>
     </div>
 </body>
 @endsection