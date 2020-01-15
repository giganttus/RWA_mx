@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header text-center">Praćenje pošiljke</h5>
                    <div class="card-body ">
                        <form action="{{route('orders.tracker')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="id" placeholder="TC (Tracking Code)" required>
                                </div>
                                <div class="form-group col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                Traži
                            </button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
