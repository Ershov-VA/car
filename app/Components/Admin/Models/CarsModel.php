<?php
namespace App\Components\Admin\Models;

use CodeIgniter\Model;

class CarsModel extends Model {

    protected $data = []; 

    public function __construct() {
        $this->db = new \MongoDB\Driver\Manager('mongodb+srv://api:Aa12345678!@cluster0.uyql2ld.mongodb.net/?retryWrites=true&w=majority', []);
    }

    public function getAllCars() {
        $query = new \MongoDB\Driver\Query([]);
        $cursor = $this->db->executeQuery("cars.test", $query);

        foreach ($cursor as $document) {
            array_push($this->data, $document);
        }

        return $this->data;
    }

    public function getCarById($id) {
        return $this->data[$id];
    }

    public function addCar($data) {
        array_push($this->data, $data);
        return $this->data;
    }

    public function getCarsList() {
        $query = new \MongoDB\Driver\Query([]);
        $cursor = $this->db->executeQuery("cars.cars", $query);

        foreach ($cursor as $document) {
            array_push($this->data, $document);
        }

        return $this->data;
    }
    
}