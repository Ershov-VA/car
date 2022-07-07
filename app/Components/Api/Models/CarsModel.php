<?php
namespace App\Components\Api\Models;

use CodeIgniter\Model;

class CarsModel extends Model {


    protected $data = [];//;[ ["title"=>"name 1", "number" => "123"], ["title"=>"name2", "number"=>"234"] ];

    public function __construct() {
        $this->db = new \MongoDB\Driver\Manager('mongodb+srv://api:Aa12345678!@cluster0.uyql2ld.mongodb.net/?retryWrites=true&w=majority', []);
        $this->bulk = new \MongoDB\Driver\BulkWrite;
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
        $query = new \MongoDB\Driver\Query(['_id' => new \MongoDB\BSON\ObjectID($id)], []);
        $cursor = $this->db->executeQuery("cars.cars", $query);

        foreach ($cursor as $document) {
            array_push($this->data, $document);
        }

        return $this->data;
    }

    public function addCar($data) {
        $this->bulk->insert($data);
        $this->db->executeBulkWrite('cars.cars', $this->bulk);
        
        return true;
    }

    public function addFuel($data) {
        $this->bulk->insert($data);
        $this->db->executeBulkWrite('cars.fuel', $this->bulk);
        
        return true;
    }
    
}