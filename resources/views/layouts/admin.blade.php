@extends('layouts.app')
@section('admin')
    @guest
        @include("layouts.404")
    @else
        @if(Auth::user()->role == 'admin')
            @include("components.admin.header")
            <div class="container">
                @yield('admin.blade.php')
                @yield('users')
                @yield('orders')
            </div>
        @else
           @include("layouts.404")
        @endif
    @endguest
@endsection
