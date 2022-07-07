<?php
namespace App\Components\Admin\Controllers;

use App\Components\Admin\Controllers\BaseController;
use App\Components\Admin\Models\CarsModel;

class Cars extends BaseController {
    public function index() {

        $carsModel = new CarsModel();
        
        $data = [
            "header" => view('Components\Admin\Views\header', ["page" => "cars"]),
            "content" => view('Components\Admin\Views\cars', ["cars" => json_decode(json_encode($carsModel->getCarsList()), true) ]),
            "footer" => view('Components\Admin\Views\footer')
        ];
        
        return view('Components\Admin\Views\main', $data);
    }

    public function getAll() {

        $carModel = new CarsModel();
        $data['data'] = json_decode(json_encode($carModel->getAllCars()), true);

        return view('Components\Api\Views\cars', $data);
    }
}



