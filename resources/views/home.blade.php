@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="titelos"><h1>Dashboard</div>

                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

                    <a href="/posts/create" class="btn btn-primary">Artikel maken</a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection