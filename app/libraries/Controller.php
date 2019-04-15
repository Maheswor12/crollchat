<?php
// Base controller
// loads the models and views
class controller{
    // load model
     public function model($model){
        // Required model file
        require_once '../app/models/'.$model.'.php';
        // instatniate model
        return new $model;
    }
    // load view
    public function view($view, $data=[]){
        // check for the view file
        if(file_exists('../app/views/'.$view.'.php'))
        {
            // required view file
            require_once '../app/views/'.$view.'.php';
        }
        else
        {
            // view doesnot exist
            die('view doesnot exist');

        }
    }
}
