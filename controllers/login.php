<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('login/js/login.js');
    }
    
    function index() {
        $this->view->title = 'Identificação do Admin';
		$this->view->render('header');
        $this->view->render('login/index');
		$this->view->render('footer');
    }
     function ver()
    {
        $this->model->ver();
    }
}