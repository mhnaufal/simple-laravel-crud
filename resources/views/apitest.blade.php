@extends('layouts.layout')

@section('contents')

<body>
    <div class="container text-center">
    <br>
        <h4>Calling API Azura Labs</h4>
        <table class="table table-striped table-hover justify-content-center">
            <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                    <th scope="col">Sender</th>
                    <th scope="col">Payload</th>
                    <th scope="col">Conn checker</th>
                </tr>
            </thead>
            <tbody>
                <td>{{ $apitest['status'] }}</td>
                <td>{{ $apitest['message'] }}</td>
                <td>{{ $apitest['sender'] }}</td>
                <td>{{ $apitest['payload'] }}</td>
                <td>{{ $apitest->status() }}</td>
            </tbody>
        </table>
        
        <br><hr><br>

        <h4>Calling OMDB API</h4>
        <table class="table table-striped table-hover justify-content-center">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Year</th>
                    <th scope="col">imdbID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Poster</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 9; $i++) <tr>
                    <td>{{ $api[$i]['Title'] }}</td>
                    <td>{{ $api[$i]['Year'] }}</td>
                    <td>{{ $api[$i]['imdbID'] }}</td>
                    <td>{{ $api[$i]['Type'] }}</td>
                    <td><img src="{{ $api[$i]['Poster'] }}" class="img-fluid w-25"> </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</body>
@endsection