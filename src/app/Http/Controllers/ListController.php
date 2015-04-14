<?php namespace Media24si\RouteExplorer\app\Http\Controllers;

class ListController extends Controller {

	public function routes() {
		$routes = \Route::getRoutes();
		return view('RouteExplorer::list.routes', ['routes' => $routes]);
	}

}