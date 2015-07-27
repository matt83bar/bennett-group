<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ServicesController extends Controller {

    /**
     * Show the legal services page.
     *
     * @return Response
     */
    public function legal()
    {
        $pageData = [
            "title" => "Legal Services",
            "stuff" => "Wonky"
        ];
        return view('services.legal', $pageData);
    }

}