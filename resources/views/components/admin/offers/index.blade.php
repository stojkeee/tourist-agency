@extends("layouts.admin")

@section("admin.blade.php")
    <div class="row">
        <div class="col-lg-12 mt-50">
            <a class="btn-bg-send white" href="{{ route('offers.create') }}"> Create New offer</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-50">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <thead class="thead-light">
                @foreach ($offers as $offer)
                    <tr>
                        <td class="align-middle"><p>{{ $offer->title}}</p></td>
                        <td class="align-middle"><p>{{ $offer->price}} KM</p></td>
                        <td class="align-middle"><p>{{ $offer->description}}</p></td>
                        <td class="align-middle"><p>{{ $offer->date}}</p></td>
                        <td class="align-middle">
                            <div class="table-img"><img src="{{url('uploads/'.$offer->filename)}}"
                                                        alt="{{$offer->filename}}"
                                                        style="height: 100%;width: 100%;object-fit: cover;"></div>
                        </td>
                        <td class="align-middle">

                            <a class="btn btn-success btn-sm" href="{{ route('offers.edit',$offer->id) }}">Edit</a>

                            {!! Form::open(['method' => 'POST','route' => ['offers.destroy_offer', $offer->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $offers->links() !!}

@endsection
