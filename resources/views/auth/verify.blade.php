@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite svoju E-mail adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Novi kod za potvrdu E-mail adrese je upravo poslan.') }}
                        </div>
                    @endif

                    {{ __('Provjerite svoj E-mail za potvrdu.') }}
                    {{ __('Niste dobili mail za potvrdu ?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Pritisnite ovjde za novi.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
