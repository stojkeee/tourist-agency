<section id="Offers">
    <div class="container mt-75">
        <div class="row">
            <div class="col">
                <h4 class="title">We are offering</h4>
            </div>
        </div>
        <div class="row mt-25">
            <div class="col-sm-4">
                <input id="cardsearchinput" class="form-control" type="text" placeholder="Search.."
                       style="display: inline-block; margin-bottom: 20px !important;">
            </div>
            <div class="col">
                {{Form::open(array('route' => 'offers.home','method' => 'get'))}}
                {{ Form::select('type', array('any' => 'Type','mountain' => 'Mountain', 'sea' => 'Sea', 'tourist-destination' => 'Tourist Destination', 'city' =>  'City'), null, array('class'=>'form-control col-sm-4','style'=>'margin:0 10px 20px 0; display:inline-block;' )) }}
                {{ Form::select('country', array('any' => 'Country', 'bih' => 'BiH', 'croatia' => 'Croatia', 'serbia' => 'Srbija', 'montenegro' => 'Montenegro'), null, array('class'=>'form-control col-sm-4','style'=>'margin:0 10px 20px 0; display:inline-block;' )) }}
                {!! Form::submit('Search', ['class' => 'btn-bg-send white']) !!}
                {{ Form::close() }}
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if ($message = Session::get('error'))
                    <div class="alert alert-warning">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div id="alert" class="alert alert-danger" role="alert" style="display: none">
                    You need to be Logged In!
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex h-100 mt-50">
        <div class="row align-items-center justify-content-center">

            @foreach($offers as $offer)
                @include("components.home.card")
            @endforeach

        </div>
    </div>
    <section>
