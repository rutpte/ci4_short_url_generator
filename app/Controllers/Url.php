<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UrlModel;
use App\Libraries\QRcode;   
use App\Libraries\Config;   

//------------------------
//$config = new Config();
//var_dump($config);
//$ROOT_PROJ = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]."/".$config->PROJ_NAME."/public";
//var_dump($ROOT_PROJ);exit;
//-----------------------
class Url extends controller{
    //public $your_project_folder = "ci4_basic";
    //public $ROOT_PROJ = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]."/".$this->your_project_folder."/public";
    

    public function index(){
        $uri = service('uri');
        $data =$uri->getSegments();
        //var_dump($data);
        $id = $data[0];
        //var_dump($id);
        $model = new UrlModel();
        $rs = $model->where('id',$id)->first();
        $ori_url = $rs['ori_url'];
        $num_click = $rs['num_click'];

        //$new_num_click = intval($num_click+1);
        //var_dump($new_num_click);


        $model->update($id,[
            'num_click'=>$num_click+1
        ]);
        //var_dump($rs['ori_url']);

        //$ori_url= "https://www.google.com/";
        // $x = strpos(@get_headers($ori_url)[0],'200');
        // var_dump($x); 
        $file_headers = @get_headers($ori_url);
        // var_dump($file_headers); 
        // exit;
        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }

        if($exists){
            // $config = new Config();
            //var_dump($config);
            // $ROOT_PROJ = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]."/".$config->PROJ_NAME."/public";
            //return redirect()->to(site_url($ori_url));
            //header( "location: ".$ori_url );
            $srt_js = "<script>window.location = '".$ori_url."';</script>";
            //echo "<script>alert('".$ori_url." : url does not exits.');</script>";
            //var_dump($srt_js);exit;
            echo $srt_js;
           
        } else {
            echo "<script>alert('".$ori_url." : url does not exits.');</script>";
            $srt_js = "<script>history.back();</script>";
            echo $srt_js;

        }


    }
    // public function listall(){
    //     $model = new UrlModel();
    //     $data = [
    //         'url' => $model->getUrl(),
    //         'title' => "all data"
    //     ];
    //     $page = "overviews";
    //     echo view('templates/header', $data);
    //     echo view('url/'.$page, $data);
    //     echo view('templates/footer', $data);
    // }

    // public function detail(){
    //     $model = new UrlModel();
    //     $data = [
    //         'url'=> $model->getOneUrl(),
    //         'title' => "data detail"
    //     ];
    // }

    public function c_add_url(){
        //echo '<pre>';var_dump($_SERVER["HTTP_ORIGIN"].'/ci4_basic/public/');exit;
        $model = new UrlModel();

        if ($this->request->getPost()){ //post from form.
        //if($this->request->getMethod() === 'post'){
            $req_ori_url = $this->request->getPost('ori_url');

            // $req_detail = $this->request->getPost('detail');
            //var_dump($req_ori_url);exit;
            if($req_ori_url  != ""){
                $rs = $model->save([
                    'ori_url'=>$req_ori_url,
                    'short_url'=>'',
                    'num_click'=>0
                ]);
                $InsertID = $model->getInsertID();

                //------------------------
                $config = new Config();
                //var_dump($config);
                $ROOT_PROJ = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]."/".$config->PROJ_NAME."/public";
                //-----------------------
                $short_url = $ROOT_PROJ.'/'.$InsertID;

                $model->update($InsertID,[
                    'short_url'=>$short_url
                ]);
    
                //exit;
                $qrc_path = self::c_gen_qrcode($short_url);
                //var_dump($qrc_path);exit; 
    
                //var_dump($InsertID);exit;
                //--> updata path qr_code.
                $model->update($InsertID,[
                    'qrc_path'=>$qrc_path
                ]);
                self::do_log("add url : ".$short_url);
                //--return redirect()->to(site_url('/list_url'));
                //$app_url = $_SERVER["HTTP_ORIGIN"].'/ci4_basic/public'.'/list_url';
                //var_dump($app_url);
                //--return redirect()->to(site_url($app_url));
                //$x = "http://localhost/ci4_basic/public/list_url";
                //echo '<a href="'.$x.'">show list</a>';
                //success_del

                //echo "<script>alert('success. see your data in menu');</script>";
                $srt_js = "<script>window.location = '".$ROOT_PROJ."/list_url';</script>";
                echo $srt_js;

                
            } else {

            }

        }

        //--> always show get || post.
        // $data = [
        //     'url' => $model->getUrl()
        // ];

        //$datetime = (new \CodeIgniter\I18n\Time("now", "Europe/Berlin", "de_DE"));
        //print $datetime->format('Y-m-d H:m:s');
        //var_dump($micro_time);
        
        //var_dump($data);exit;
        $page = "main_url";
        echo view('url/'.$page);

        
    }


    public function c_del_url(){
        $uri = service('uri');
        $data =$uri->getSegments();
        $id = $data[1];
        $model = new UrlModel();
        $model->where('id',$id)->delete($id);

        //self::c_add_url();
        //return redirect()->route("/ci4_basic/public/add_url"); 
        $x = $_SERVER['HTTP_REFERER'];
        //var_dump($x);exit;
        self::do_log("delete url id : ".$id);
        //echo '<a href="'.$x.'">back</a>';
        //return redirect()->route($x); 
        //echo '<a href="?">back</a>';
        //return redirect()->to('public/form_add');
        //return redirect()->route('form_add');
        //return redirect()->to('/form_add'); 
        //redirect('form_add','location',304)->send();
        $page = "success_del";
        // echo view('templates/header');
        echo view('url/'.$page);
        // echo view('templates/footer'); 
        
    }

    // public function c_gen_qrcode_old(){
        
    //     $qrcode = new QRcode();
    //     $hlp_keycode = "111111";
    //     $imgpath = dirname($_SERVER["SCRIPT_FILENAME"]) . "/photo/qrcode/" . $hlp_keycode . '.png';
    //     $urlkeycode = base_url();
    //     if (!file_exists($imgpath)) {
    //     $params['data'] = $urlkeycode;
    //     $params['level'] = 'H';
    //     $params['size'] = 8;
    //     $params['black'] = array(255, 255, 255);
    //     $params['white'] = array(0, 0, 0);
    //     $params['savename'] = dirname($_SERVER["SCRIPT_FILENAME"]) . "/photo/qrcode/" . $hlp_keycode . '.png';
    //     $qrcode->generate($params);
    //     }
    // }
    public function c_gen_qrcode($short_url="xxx"){
        //include "qrlib.php"; 
        $qrcode = new QRcode();
        $qrc_path = $qrcode->generate($short_url);
        return $qrc_path;
    }

    public function c_list_url(){
        $model = new UrlModel();

        $data = [
            'url' => $model->getUrl()
        ];
        $page = "list_url";
        // echo view('templates/header', $data);
        echo view('url/'.$page, $data);
        // echo view('templates/footer', $data); 
    }
    public function do_log($event=''){
        $filename = dirname(__FILE__).'/../..'.DIRECTORY_SEPARATOR.'public/temp'.DIRECTORY_SEPARATOR.'/log.log'; 
        $fh = fopen($filename, "a") or die("Could not open log file.");
        fwrite($fh, date("d-m-Y H:i:s")." , ip :".$_SERVER["REMOTE_ADDR"]." ,event : $event"." , computer_name : ".gethostname()." , browser : ".$_SERVER["HTTP_USER_AGENT"]."\n") or die("Could not write file!");
        fclose($fh);
    }

}

