@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
           
                <div class="card-header">
                    <div class="card-body">
                    <passport-clients></passport-clients>
                </div>

                <div class="card-header">
                    <div class="card-body">
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection