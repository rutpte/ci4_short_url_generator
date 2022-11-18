<?php namespace App\Controllers; //group of class.

use CodeIgniter\Controller;

class Pages extends Controller {
    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){
        $file_view = APPPATH.'Views/pages/'.$page.'.php';
        // var_dump($file_view);
        // var_dump(is_file($file_view));
        // exit;
        if(!is_file($file_view)){
            echo 'test';
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
}
