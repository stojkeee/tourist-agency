<div class="modal fade" id="modal-reservation-{{ $offer->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title turisti-ka-agencija" id="exampleModalLongTitle">{{ $offer->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <img src="{{url('uploads/'.$offer->filename)}}" alt="{{$offer->filename}}"
                 style="width: 100%; max-height: 200px; object-fit: cover;">

            <div class="modal-body">
                <p class="card-date" align="right">{{$offer->date}}</p>
                <p class="card-text">{{ $offer->description}}</p>

                <form id="order-{{ $offer->id}}" class="hidden"
                      action="{{ route('offers.store_order', $offer->id) }}"
                      method="POST">
                    <hr>
                    <div class="row mt-15 align-items-center">
                        <div class="col">
                            <p>Peoples going with me:</p>
                        </div>
                        <div class="col">
                            <select name="persons" class="custom-select">
                                <option selected value="1">Only me</option>
                                <option value="2">2 persons</option>
                                <option value="3">3 persons</option>
                                <option value="4">4+ persons</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-15">
                        <div class="col">
                            <label for="phone_number"><p>Phone Number</p></label>
                            <input class="form-control" type="number" value="00387" id="example-tel-input-{{ $offer->id}}"
                                   name="phone_number">
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>

            <div class="modal-footer">
                <a class="btn-bg-link" data-dismiss="modal">Close</a>
                <span class="pull-right">
        <a href="#" class="btn-bg-send" onclick="event.preventDefault();
                document.getElementById('order-{{ $offer->id}}')
                .submit();">Submit</a>
                </span>
            </div>
        </div>
    </div>
</div>
