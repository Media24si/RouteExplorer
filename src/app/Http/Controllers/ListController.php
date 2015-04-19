<?php namespace Media24si\RouteExplorer\app\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;

class ListController extends BaseController {
	use DispatchesCommands, ValidatesRequests;

	public function routes() {
		$routes = self::$router->getRoutes();
		return view('RouteExplorer::list.routes', ['routes' => $routes]);
	}


	public function matchRoute() {
		$path = '/routes';
		$method = 'GET';

		$request = Request::create($path, $method);

		// match route or return 404 not found
		$match = self::$router->getRoutes()->match($request);

		dd($match);
	}
}