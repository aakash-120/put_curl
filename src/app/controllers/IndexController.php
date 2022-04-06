<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        //put curl
        $url = "http://httpbin.org/put";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
      
        $updateArray = ['name' => 'Hardik', 'email' => 'hardik@gmail.com'];
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($updateArray));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      
        $headers = [];
        $headers[] = 'Content-Type:application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      
        $result = curl_exec($ch);
        $result = json_decode($result);
        curl_close($ch);
         echo "<pre>";
        print_r($result);
        die;
        

        // $filedata = array('metadata' => "aakash");
        // $ch = curl_init();
        // $url = 'http://httpbin.org/put';
        //  curl_setopt($ch, CURLOPT_URL, $url);
        //  curl_setopt($ch, CURLOPT_PUT, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$filedata);
        // // curl_exec($ch);

        
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $response = curl_exec($ch);
        // echo "<pre>";
        // print_r($response);
        // echo "</pre>";
        // die;
        // echo "<pre>";
        //  $a =json_decode($response , true);
        //  print_r($a);
        //  die;


   

       $this->view->nescafe = $a;
     // die();

    }
    public function searchAction() {

    }


    public function detailAction() {
        print_r($this->request->getPost());
        $this->view->data = $this->request->getPost();
        //die();
    }
}