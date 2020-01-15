@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ažuriraj status pošiljke pod TC (Tracking Code) "{{$orders->id}}" </div>
                    <div class="card-body">
                        <form action="{{route('orders.update',$orders)}}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">Status</label>
                                <div class="form-group">
                                <select id="status" type="text" class="custom-select" name="status">
                                    <option selected >{{$orders->status}}</option>
                                    <option>Kurir preuzeo pošiljku</option>
                                    <option>U tranzitu</option>
                                    <option>Odredišno područno skladište</option>
                                    <option>Na isporuci</option>
                                    <option>Isporučeno</option>
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Ažuriraj
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
