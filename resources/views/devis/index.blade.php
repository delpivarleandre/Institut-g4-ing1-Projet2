
@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </thead>
    <tbody>
      @foreach($devis as $devi)
      <tr>
        <td>{{$devi->id}}</td>
        <td>{{$devi->name}}</td>
        <td>{{$devi->email}}</td>
        <td>{{$devi->phone}}</td>
        <td><a href="{{action('DevisController@downloadPDF', $devi->id)}}">Download PDF</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('devis.create')}}" class="btn btn-success "> Demander un devis</a>

@endsection