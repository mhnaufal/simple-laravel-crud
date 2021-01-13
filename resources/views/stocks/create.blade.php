<!-- ADMIN - ADD A NEW COMPANY  -->
<!-- with SEVERAL INPUT FORM, SUBMIT BUTTON, & BACK BUTTON -->
@extends('layouts.layout')

@section('contents')

<body>
    <br>
    <div class="container text-left">
        <h3>Enter a new company!</h3>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="/stocks">
                    @csrf
                    <div class="mb-3">
                        <label for="Name" class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Name" placeholder="ex: SpaceX" value="{{ old('name') }}" autocomplete="off">
                        @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Name" class="form-text">Make sure you spell it correctly!</div>
                    </div>
                    <div class="mb-3">
                        <label for="Buy" class="form-label">Initial Purchase Price</label>
                        <input type="number" class="form-control @error('buy') is-invalid @enderror" name="buy" step="50000" min="100000" max="1000000" id="Buy" value="{{old('buy')}}" autocomplete="off">
                        @error('buy')
                        <div id=" validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Buy" class="form-text">Minimum Initial value is 100000 IDR</div>
                    </div>
                    <div class="mb-3">
                        <label for="Sell" class="form-label">Initial Selling Price</label>
                        <input type="number" class="form-control @error('sell') is-invalid @enderror" name="sell" step="50000" min="50000" max="1000000" id="Sell" value="{{ old('sell') }}" autocomplete="off">
                        @error('sell')
                        <div id=" validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="Sell" class="form-text">Minimum Initial value is 50000 IDR</div>
                    </div>
                    <div class="mb-3">
                        <label for="Lot" class="form-label">Lots Available</label>
                        <input type="number" class="form-control @error('lot') is-invalid @enderror" name="lot" min="1" max="100" id="Lot" value="{{old('lot')}}" autocomplete="off">
                        @error('lot')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <div id="lot" class="form-text">Minimum lot available is 1</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
                <a href="/stocks/index" class="card-link"><button class="btn btn-outline-dark btn-sm my-2"> Cancel </button></a>
            </div>
            <div class="col-4">
                <img src="/img/eth.png" width="100%" class="ms-5 my-5">
            </div>
        </div>
    </div>
</body>

@endsection