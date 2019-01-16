@extends('layouts.admin')


@section('admin.blade.php')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-50">
            <div class="pull-left">
                <h4>Edit Offer</h4>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col">
            {!! Form::model($offer, ['method' => 'PATCH','route' => ['offers.update', $offer->id]]) !!}
            @include('components.admin.offers.form')
            {!! Form::close() !!}
        </div>
        <div class="col d-flex align-items-center justify-content-center">
                <div class="card mb-30 mr-30">
                    <img class="card-img-top" src="{{url('uploads/'.$offer->filename)}}" alt="{{$offer->filename}}">
                    <div class="price-block"><p class="price-bg">{{ $offer->price}} KM</p></div>
                    <div class="card-block">
                        <h4 class="card-title">{{ $offer->title}}</h4>
                        <p class="card-date" align="right">{{$offer->date}}</p>
                        <p class="card-text">{{ $offer->description}}</p>
                    </div>
                </div>
        </div>
    </div>




@endsection