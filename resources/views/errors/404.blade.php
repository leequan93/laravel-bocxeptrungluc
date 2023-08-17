@extends('layouts.app')

@section('content')
    <div class="section-lg bg-default text-center">
        <div class="bg-decoration">
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
            <div class="bg-decoration-item"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <h6>
                        <span class="head-text">You may have mistyped the address or the page may have moved</span>
                    </h6>
                    <h2>Sorry, but the page was not found</h2>
                    <div class="group">
                        <a class="button button-primary button-ujarak" href="{{ route('home') }}">Go to home page</a>
                        <a class="button button-default button-ujarak" href="tel:0984050424">Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection