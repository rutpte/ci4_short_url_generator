<?php namespace App\Models;

use CodeIgniter\Model;

class UrlModel extends Model {
    protected $table = 'url';
    protected $allowedFields = ['ori_url','short_url','qrc_path','num_click'];
    public function getUrl(){
        return $this->findAll();
    }


}