@extends('layouts.layout')

@section('contents')

<body>
    <div class="container text-center">
        <h4>Hasil Calling API Azura Labs</h4>
        <table class="table table-striped table-hover justify-content-center">
            <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                    <th scope="col">Sender</th>
                    <th scope="col">Payload</th>
                </tr>
            </thead>
            <tbody>
                <td>{{ $api['status'] }}</td>
                <td>{{ $api['message'] }}</td>
                <td>{{ $api['sender'] }}</td>
                <td>{{ $api['payload'] }}</td>
            </tbody>
        </table>
    </div>
</body>
@endsection