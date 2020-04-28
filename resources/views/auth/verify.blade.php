@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Je email adres bevestigen') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Er is een verificatie email naar je verstuurd.') }}
                        </div>
                    @endif

                    {{ __('Bekijk voor je verdergaat je inbox om te zien of er een verificatielink is aangekomen.') }}
                    {{ __('Als je nog geen email hebt ontvangen') }},
                    <form class="d-inline" method="POST" action="{{ route('email opnieuw sturen') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik hier om nog een verificatie-email te versturen') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
