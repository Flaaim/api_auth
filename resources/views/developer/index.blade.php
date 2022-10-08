@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
           
                <div class="card-header p-2">
                    <div class="card-body">
                        <passport-clients></passport-clients>
                    </div>
                </div>
                
                <div class="card-header p-2">
                    <div class="card-body">
                         <passport-authorized-clients></passport-authorized-clients>
                    </div>
                </div>
               

                <div class="card-header p-2">
                    <div class="card-body">
                        <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection