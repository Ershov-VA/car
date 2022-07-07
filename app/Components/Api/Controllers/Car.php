<?php
namespace App\Components\Api\Controllers;

use App\Components\Api\Controllers\BaseController;
use App\Components\Api\Models\CarsModel;

class Car extends BaseController {
    public function index() {
        $data['test'] = 'all';
        return view('Components\Api\Views\cars', $data);
    }

    public function addCar() {

        $carModel = new CarsModel();
        
        $status = $carModel->addCar(array(
            "title" => $this->request->getPost('title'),
            "number" => $this->request->getPost('number'),
            "buy" => $this->request->getPost('buy'),
            "cost" => $this->request->getPost('cost'),
            "id" => $this->request->getPost('id')
        ));
        
        if ($status === true) {
            return json_encode(["status" => "success"]);
        } else {
            return json_encode(["status" => "fail"]);
        }
    }

    public function addFuel() {

        $carModel = new CarsModel();
        
        $status = $carModel->addFuel(array(
            "date" => $this->request->getPost('date'),
            "azs" => $this->request->getPost('azs'),
            "value" => $this->request->getPost('value'),
            "cost" => $this->request->getPost('cost'),
            "_id" => $this->request->getPost('_id'),
            "id" => $this->request->getPost('id'),
            "carId" => $this->request->getPost('carId'),
        ));
        
        if ($status === true) {
            return json_encode(["status" => "success"]);
        } else {
            return json_encode(["status" => "fail"]);
        }
    }

    public function getCar($id) {

        $carModel = new CarsModel();
        $data['data'] = $carModel->getCarById($id);

        echo json_encode($data);
        // return view('Components\Api\Views\cars', $data);
    }
}

