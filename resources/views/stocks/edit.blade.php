@extends('layouts.layout')

@section('contents')

<body>
    <br>
    <div class="container text-left">
        <h3>Edit {{$stockExchange->name}}</h3>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="/stocks/{{$stockExchange->id}}">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="Name" class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Name" value="{{ $stockExchange->name }}">
                        @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Name" class="form-text">Make sure you spell it correctly!</div>
                    </div>
                    <div class="mb-3">
                        <label for="Buy" class="form-label">Initial Purchase Price</label>
                        <input type="number" class="form-control @error('buy') is-invalid @enderror" name="buy" step="50000" min="100000" max="1000000" id="Buy" value="{{ $stockExchange->buy }}">
                        @error('buy')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Buy" class="form-text">Minimum Initial value is 100000 IDR</div>
                    </div>
                    <div class="mb-3">
                        <label for="Sell" class="form-label">Initial Selling Price</label>
                        <input type="number" class="form-control @error('sell') is-invalid @enderror" name="sell" step="50000" min="50000" max="1000000" id="Sell" value="{{ $stockExchange->sell }}">
                        @error('sell')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Sell" class="form-text">Minimum Initial value is 50000 IDR</div>
                    </div>
                    <div class="mb-3">
                        <label for="Lot" class="form-label">Lots Available</label>
                        <input type="number" class="form-control @error('lot') is-invalid @enderror" name="lot" min="1" max="100" id="Lot" value="{{ $stockExchange->lot }}">
                        @error('lot')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="lot" class="form-text">Minimum lot available is 1</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <form method="POST" action="{{ $stockExchange->id }}" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <a href=""><button class="btn btn-danger btn-sm ms-2">Delete</button></a>
                    </form>
                </form>
                <a href="/stocks/show/{{ $stockExchange->id }}" class="card-link"><button class="btn btn-outline-dark btn-sm my-3"> Cancel </button></a>
            </div>
            <div class="col-4">
                <img src="/img/eth.png" width="100%" class="ms-5 my-5">
            </div>
        </div>
    </div>
</body>
@endsection