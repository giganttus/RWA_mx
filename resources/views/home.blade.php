@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header text-center">Dobrodošli!</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="form-group col-md-12 text-center">
                     <p>Uspješno ste se prijavili, za bilo kakve radnje polužite se padajućim izbornikom ispod vašeg korisničkog imena (Desni gornji kut)</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
