@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><strong>My Profile</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><strong>Name :</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection