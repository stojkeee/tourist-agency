@extends("layouts.admin")

@section("orders")
        <div class="container">
            <div class="col-lg-12 mt-50">
                <div class="row justify-content-center">
                    <table class="table mt-50">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Offer</th>
                            <th class="text-center">Persons</th>
                            <th class="text-center">Ordered at</th>
                        </tr>
                        </thead>
                        <thead class="thead-light">
                    @foreach($orders as $order )
                        <tr>
                            <td class="align-middle"><p>{{ \App\User::find($order->user_id)->name}}</p></td>
                            <td class="align-middle"><p>{{ \App\Offer::find($order->offer_id)->title}}</p></td>
                            <td class="text-center"><p>{{ $order->persons}}</p></td>
                            <td class="text-center"><p>{{ $order->created_at}}</p></td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

@endsection
