<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Order;
use File;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Query\Builder;

class OfferController extends Controller {


	public function index() {
		$offers = Offer::where( 'deleted', '0' )->latest()->paginate( 20 );

		return view( 'components.admin.offers.index', compact( 'offers' ) )
			->with( 'i', ( request()->input( 'page', 1 ) - 1 ) * 5 );
	}

	public function home() {
		$offers = Offer::latest()->paginate( 20 )->where( 'deleted', '0' );

		return view( 'layouts.home', compact( 'offers' ) )
			->with( 'i', ( request()->input( 'page', 1 ) - 1 ) * 5 );
	}

	public function store( Request $request ) {
		request()->validate( [
			'title'       => 'required',
			'price'       => 'required',
			'date'        => 'required',
			'description' => 'required',
		] );

		$cover     = $request->file( 'offercover' );
		$extension = $cover->getClientOriginalExtension();
		Storage::disk( 'public' )->put( $cover->getFilename() . '.' . $extension, File::get( $cover ) );
		$offer                    = new Offer();
		$offer->title             = $request->title;
		$offer->price             = $request->price;
		$offer->date              = $request->date;
		$offer->description       = $request->description;
		$offer->mime              = $cover->getClientMimeType();
		$offer->original_filename = $cover->getClientOriginalName();
		$offer->filename          = $cover->getFilename() . '.' . $extension;
		$offer->deleted           = '0';
		$offer->save();

		return redirect()->route( 'offers.index' )
		                 ->with( 'success', 'Offer created successfully' );
	}

	public function create() {
		return view( 'components.admin.offers.create', compact( 'offer' ) );
	}

	public function edit( $id ) {
		$offer = Offer::find( $id );

		return view( 'components.admin.offers.edit', compact( 'offer' ) );
	}

	public function update( Request $request, $id ) {
		request()->validate( [
			'title'       => 'required',
			'price'       => 'required',
			'description' => 'required',
			'date'        => 'required',
		] );
		Offer::find( $id )->update( $request->all() );

		return redirect()->route( 'offers.index' )
		                 ->with( 'success', 'Offer updated successfully' );
	}

	public function destroy( $id ) {
		Offer::find( $id )->delete();

		return redirect()->route( 'offers.index' )
		                 ->with( 'success', 'Offer deleted successfully' );
	}

	public function destroy_offer( $id ) {
		Offer::find( $id )->update( 'deleted', '1' );

		return redirect()->route( 'offers.index' )
		                 ->with( 'success', 'Offer deleted successfully' );

	}


	/* ORDER DIO */

	public function store_order( $id, Request $request ) {
		$persons      = $request->get( 'persons' );
		$phone_number = $request->input( 'phone_number' );
		$user         = Auth::user();
		if ( ! $user->offer->contains( $id )) {
			$user->offer()->attach( $id, [ 'phone_number' => $phone_number, 'persons' => $persons ] );
		} else {
			return back()->with( 'error', 'You already booked this!' );
		}

		return back();
	}

	public function index_order( Request $request ) {
		$offers = $request->user()->offer()->paginate( 10 );
		$user   = Auth::user();

		return view( 'components.home.orders', compact( 'offers', 'user' ) );
	}

	public function all_index_order() {
		$orders = Order::latest()->paginate( 10 );

		return view( 'components.admin.orders.index', compact( 'orders', 'user' ) );
	}

	public function destroy_order( Request $request, Offer $offer ) {
		$request->user()->offer()->detach( $offer );

		return back();
	}

}
