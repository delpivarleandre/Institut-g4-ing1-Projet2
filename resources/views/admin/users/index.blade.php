@extends('layouts.panel')
@section('title')
    Gestion
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <div class="card-body">

                    <table class="table">
                    <thread>
                        <tr>
                        <th scope ="col">Nom</th>
                        <th scope ="col">Email</th>
                        <th scope ="col">Rôles</th>
                        <th scope ="col">Actions</th>
                        </tr>
                    </thread>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                        <td>
                            @can('is_admin')
                              <a href="{{route('admin.users.edit', $user->id)}}"><button class=" btn btn-primary">Éditer</button></a>
                            @endcan
                            @can('is_admin')
                              <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-warning">Supprimer</button>
                              </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
