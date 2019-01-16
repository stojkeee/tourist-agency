@extends("layouts.admin")

@section("users")

    <div class="row">
        <div class="col-lg-12 mt-50">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="col-lg-12 mt-50">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <thead class="thead-light">
                @foreach ($users as $user)
                    <tr>
                        <td class="align-middle"><p>{{ $user->name}}</p></td>
                        <td class="align-middle"><p>{{ $user->email}}</p></td>
                        <td class="align-middle"><p>{{ $user->role}}</p></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('users.edit',$user->id) }}">Change permisions</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $users->links() !!}

@endsection