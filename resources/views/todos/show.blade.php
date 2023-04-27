@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b> Your Todo Title: </b> {{ $todos->title }} <br>
                    <b> Your Todo Description: </b> {{ $todos->description }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
