@extends('layouts.app')

@section('content')
    <!-- Naslov stranice -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Informacije Pošiljatelja</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">TC</th>
                                    <th scope="col">Ime</th>
                                    <th scope="col">Prezime</th>
                                    <th scope="col">Tel/mob</th>
                                    <th scope="col">Opis pošiljke</th>
                                    <th scope="col">Veličina pošiljke</th>
                                    <th scope="col">Briši dostavu</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($orders as $o)
                                    <tr>
                                        <th scope="row">{{ $o->id }}</th>
                                        <td>{{ $o->name }}</td>
                                        <td>{{ $o->lastname }}</td>
                                        <td>{{ $o->contact }}</td>
                                        <td>{{ $o->details }}</td>
                                        <td>{{ $o->size }}</td>
                                        <td>
                                            @can('delete-users')
                                                <form action="" method="POST" class="float-left">
                                                    @csrf
                                                    {{ method_field ('DELETE') }}
                                                    <button type="submit" class="btn btn-warning">Briši</button>
                                                </form>
                                            @endcan
                                        </td>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Informacije Primatelja</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">TC</th>
                                    <th scope="col">Ime</th>
                                    <th scope="col">Prezime</th>
                                    <th scope="col">Mob/tel</th>
                                    <th scope="col">Adresa</th>
                                    <th scope="col">Županija</th>
                                    <th scope="col">Grad</th>
                                    <th scope="col">Poštanski br</th>
                                    <th scope="col">Status pošiljke</th>
                                    <th scope="col">Uredi status</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($orders as $o)
                                    <tr>
                                        <th scope="row">{{ $o->id }}</th>
                                        <td>{{ $o->name2 }}</td>
                                        <td>{{ $o->lastname2 }}</td>
                                        <td>{{ $o->contact2 }}</td>
                                        <td>{{ $o->address }}</td>
                                        <td>{{ $o->state }}</td>
                                        <td>{{ $o->city }}</td>
                                        <td>{{ $o->zip }}</td>
                                        <td>{{ $o->status }}</td>
                                        <td>
                                            @can('edit-users')
                                                <a href="{{ route('editorders', $o->id) }}"><button type="button"  class="btn btn-primary float-left">Uredi</button></a>
                                            @endcan
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
    </div>


@endsection