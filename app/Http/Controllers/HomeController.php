<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller {

    /**
     * Show the home page.
     *
     * @return Response
     */
    public function home()
    {
        $pageData = [
            "title" => "Home",
            "stuff" => "Wonky"
        ];
        view()->share('title', 'Home');
        view()->share('stuff', "Wonky");
        return view('home');
    }

}