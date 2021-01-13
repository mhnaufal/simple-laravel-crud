 <!-- NON_ADMIN - RETRIVE ALL DATA -->
 <!-- with MAKE OFFER BUTTON  -->
 @extends('layouts/layout')

 @section('contents')

 <body>
     <div class="container text-center">
         <br>
         <br>
         <table class="table table-striped table-hover justify-content-center caption-top">
             <h3><strong>List All Stocks</strong></h3>
             @if (session('msg'))
             <div class="alert alert-success">
                 {{ session('msg') }}
             </div>
             @endif
             <hr>
             <div class="d-flex bd-highlight mb-3">
                 <p class="me-auto p-2 bd-highlight">Server time: 10-01-2021 10:21 WIB</p>
                 <a href="/stocks/create" class="p-2 bd-highlight"><button class=" btn btn-primary btn-sm">New Stock</button></a>
             </div>
             <thead>
                 <tr>
                     <th scope="col">Trading ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Purchase Price (IDR)</th>
                     <th scope="col">Selling Price (IDR)</th>
                     <th scope="col">Lot(s)</th>
                     <th scope="col">Options</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($stocks as $stock)
                 <tr>
                     <td> {{$loop->iteration}} </td>
                     <td> {{$stock->name}} </td>
                     <td> {{$stock->buy}} </td>
                     <td> {{$stock->sell}} </td>
                     <td>
                         @if($stock->lot == 0)
                         <select name="type" id="lot">
                             <option value="0">0</option>
                         </select>
                         @elseif($stock->lot == 1)
                         <select name="type" id="lot">
                             <option value="1">1</option>
                         </select>
                         @elseif($stock->lot == 2)
                         <select name="type" id="lot">
                             <option value="1">1</option>
                             <option value="2">2</option>
                         </select>
                         @else
                         <select name="type" id="lot">
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                         </select>
                         @endif
                         <mark> {{ $stock->lot }} </mark>
                     </td>
                     <td>
                         <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy</button>
                         <a href="/stocks/show/{{ $stock->id }}"><button class="btn btn-outline-dark btn-sm">Details</button></a>
                     </td>
                 </tr>
                 @endforeach
             </tbody>
             <tfoot>
                 <tr>
                     <td></td>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                     <td></td>
                 </tr>
             </tfoot>
         </table>
     </div>

     <!-- Modal Buy-->
     <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Confirm Buy</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <h3>
                         Confirm buying the 2 stocks with 2 lots?
                     </h3>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="button" class="btn btn-primary">Confirm</button>
                 </div>
             </div>
         </div>
     </div>
 </body>
 @endsection