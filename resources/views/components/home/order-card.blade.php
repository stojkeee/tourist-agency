@include("components.home.modal-reservation")
<div class="card m-4">
    <img class="card-img-top" src="{{url('uploads/'.$offer->filename)}}" alt="{{$offer->filename}}">
    <div class="price-block"><p class="price-bg">{{ $offer->price}} KM</p></div>
    <div class="card-block">
        <h4 class="card-title">{{ $offer->title}}</h4>
        <p class="card-date" align="right">{{$offer->date}}</p>
        <p class="card-text">{{ $offer->description}}</p>
        <hr>
        <p class="card-title-small text-left">Phone Number:</p>
        <p class="card-text text-right">{{ $offer->pivot->phone_number}}</p>
        <hr>
        <p class="card-title-small text-left">Persons:</p>
        <p class="card-text text-right">{{ $offer->pivot->persons}}</p>
        <hr>
        <p class="card-title-small text-left">Reservated at:</p>
        <p class="card-text text-right">{{ $offer->pivot->created_at}}</p>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-25">

        <a href="#" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                document.getElementById('offer-destroy-{{ $offer->id }}')
                .submit();">
            Cancel Reservation
        </a>
        <form action="{{ route('offers.destroy_order', $offer) }}"
              method="POST"
              id="offer-destroy-{{ $offer->id }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
    </div>
</div>

