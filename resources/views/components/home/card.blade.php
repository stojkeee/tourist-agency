@include("components.home.modal-reservation")

<div class="card mb-30 mr-30">
    <img class="card-img-top" src="{{url('uploads/'.$offer->filename)}}" alt="{{$offer->filename}}">
    <div class="price-block"><p class="price-bg">{{ $offer->price}} KM</p></div>
    <div class="card-block">
        <h4 class="card-title">{{ $offer->title}}</h4>
        <p class="card-date" align="right">{{$offer->date}}</p>
        <p class="card-text">{{ $offer->description}}</p>
    </div>
    <div class="d-flex align-items-center justify-content-center mb-30">
        @guest
            <a class="btn-bg-send alert-button">Book this</a>
        @else
            <a class="btn-bg-send" data-toggle="modal" data-target="#modal-reservation-{{ $offer->id}}">
                Book this
            </a>
        @endguest
    </div>
</div>
