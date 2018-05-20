<?php
    class Pages extends Controller {

        public function __construct(){

        }
        public function about() {
            $data = ['title'=>'ABOUT PAGE'];
            $this->view('pages/about',$data);
        }

        public function index(){
            $data = ['title' =>'INDEX PAGE'];
            $this->view('pages/index',$data);
        }
    }