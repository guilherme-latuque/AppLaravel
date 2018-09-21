@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Welcome {{ Auth::user()->name }}!</h2>
                    <br>
                    You are logged in with the following credentials:
                    <br><br>
                    Name: {{ Auth::user()->name }}
                    <br>
                    E-mail: {{ Auth::user()->email }}
                    <br>
                    Password: {{ Auth::user()->password }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
