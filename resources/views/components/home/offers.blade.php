<section id="Offers">
    <div class="container mt-75">
        <div class="row">
            <div class="col">
                <h4 class="title">We are offering</h4>
            </div>
        </div>
        <div class="row">
            <div class="col mt-25">
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
            @foreach ($offers as $offer)
                @include("components.home.card")
            @endforeach
        </div>
    </div>
    <section>
