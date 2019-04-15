<?php
    class Posts extends controller{
        public function __construct()
        {
            if(!isset($_SESSION['user_id'])){
                redirect('users/login'); 
            }
            
        }

        public function index(){
            $data = [];   
            $this->view('posts/index',$data);
        }

       

    }


?>