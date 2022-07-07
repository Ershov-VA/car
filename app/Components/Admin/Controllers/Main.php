<?php
namespace App\Components\Admin\Controllers;

use App\Components\Admin\Controllers\BaseController;

class Main extends BaseController {
    public function index() {
        
        $data = [
            "header" => view('Components\Admin\Views\header'),
            "content" => view('Components\Admin\Views\content'),
            "footer" => view('Components\Admin\Views\footer')
        ];
        return view('Components\Admin\Views\main', $data);
    }

}

