<?php
namespace App\Components\Api\Controllers;

use App\Components\Api\Controllers\BaseController;
use App\Components\Api\Models\CarsModel;

class Cars extends BaseController {
    public function index() {
        $data['test'] = 'all';
        return view('Components\Api\Views\cars', $data);
    }

    public function getAll() {

        $carModel = new CarsModel();
        $data['data'] = $carModel->getAllCars();

        echo json_encode($data);

    }
}



