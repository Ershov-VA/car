<?php
namespace App\Components\Admin\Controllers;

use App\Components\Admin\Controllers\BaseController;
use App\Components\Admin\Models\CarsModel;

class Repairs extends BaseController {
    public function index() {
        return view('Components\Admin\Views\repairs');
    }

}



