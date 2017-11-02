<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeesController extends Controller
{
	public function index(){
		$client = app()->make('DeliverClient');

		$coffees = $client->getItems([
			'system.type' => 'coffee'
		]);

		$viewData = [
			'coffees' => $coffees->getItems(),
			'processings' => $client->getTaxonomy('processing'),
			'product_statuses' => $client->getTaxonomy('product_status')
		];

		return view('products.coffees.index', $viewData);
	}

	public function filter(Request $request){
		$client = app()->make('DeliverClient');

		$params = [
			'system.type' => 'coffee'
		];

		$selected_processings = $request->input('processing');
		if(count($selected_processings)){
			$params['elements.processing[any]'] = implode(',', $selected_processings);
		}

		$selected_product_statuses = $request->input('product_status');
		if(count($selected_product_statuses)){
			$params['elements.product_status[any]'] = implode(',', $selected_product_statuses);
		}

		$coffees = $client->getItems($params);

		$viewData = [
			'products' => $coffees->getItems()
		];

		return view('products._product_listing', $viewData);
	}
}
