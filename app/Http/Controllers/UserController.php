<?php

namespace App\Http\Controllers;

use App\Offer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function index() {
		$users = User::latest()->paginate( 5 );

		return view( 'components.admin.users.index', compact( 'users' ) )
			->with( 'i', ( request()->input( 'page', 1 ) - 1 ) * 5 );
	}

	public function edit( $id ) {
		$user = User::find( $id );

		return view( 'components.admin.users.edit', compact( 'user' ) );
	}

	public function update( Request $request, $id ) {
		request()->validate( [
			'role'  => 'required',
		] );
		User::find( $id )->update( $request->all() );

		return redirect()->route( 'users.index' )
		                 ->with( 'success', 'Offer updated successfully' );
	}

	public function destroy( Request $request, $id ) {
		User::find( $id )->delete();

		return redirect()->route( 'users.index' )
		                 ->with( 'success', 'User deleted successfully' );
	}
}
