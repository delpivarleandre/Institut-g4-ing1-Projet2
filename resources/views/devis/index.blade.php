
@extends('layouts.app')
@section('content')

     
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Recapitulatif de votre commande</div>
    
                    <div class="card-body">
    
                        <table class="table">
                        <thread>
                            <tr>
                            <th scope ="col">Quantité</th>
                            <th scope ="col">Temps de location en jour</th>
                            <th scope ="col">Taille</th>
                            <th scope ="col">Actions</th>
                            </tr>
                        </thread>
                        <tbody>  
                                                
                        @foreach($devis as $devi)
                          <tr>
                          <td>{{$devi->qty}}</td>
                          <td>{{$devi->time}}</td>
                          <td>{{$devi->size}}</td>
                          <td><a href="{{action('DevisController@downloadPDF', $devi->id)}}" class="btn btn-success">Download PDF</a></td>
                          <tr>
                        @endforeach
                        
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection