
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-primary" href="{{ URL::to('/devis/pdf') }}">Export to PDF</a>
    </div>

    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-danger">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devis ?? '' as $data)
            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
    