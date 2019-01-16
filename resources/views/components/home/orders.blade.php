@extends('layouts.app')

@include("components.home.header")

@section("home.orders")
    @if($offers->count())
        <div class="container">
            <div class="col-lg-12 mt-50">
                <div class="row justify-content-center">
                    @foreach($offers as $offer )
                        @include("components.home.order-card")
                    @endforeach
                </div>
            </div>

            @else
                <div class="row h-75 justify-content-center align-items-center">
                    <div class='col justify-content-center text-center title'><h5>You don't have any reservations.</h5>
                    </div>
                </div>
            @endif
        </div>
@endsection
