@extends('layouts.admin')


@section('admin.blade.php')
    {{ csrf_field() }}
    <div class="row justify-content-center">
        <div class="col-8 margin-tb mt-50">
            <div class="pull-left">
                <h4>Add New Offer</h4>
            </div>
        </div>
    </div>
    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row  justify-content-center">
        <div class="mt-25 col-8">
            {!! Form::open(array('route' => 'offers.store','method'=>'POST', 'files' => true)) !!}
            @include('components.admin.offers.form')
            {!! Form::close() !!}
        </div>
    </div>

@endsection