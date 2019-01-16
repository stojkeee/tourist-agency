@extends('layouts.admin')


@section('users')
    <div class="row">
        <div class="col d-flex justify-content-center mt-50">
            <div class="pull-left">
                <h4>{{$user->email}}</h4>
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
        <div class="col d-flex justify-content-center">
            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
            @include('components.admin.users.form')
            {!! Form::close() !!}
        </div>
    </div>




@endsection