<?php
class Pages extends controller{
    public function __construct()
    {
    //  $this->postModel=$this->model('Post');   
     
    }
    public function index(){
        $data=[
            'title'=>'mahesh you are hero',
            'description'=>'simple social network were developed',

        ];
        $this->view('pages/index', $data);
    }
    public function about(){
        $data=[
            'title'=>'welcome about',
            'description'=>'simple social network were developed',

        ];
        $this->view('pages/about', $data);
    }
}