<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 7/28/2017
 * Time: 2:21 PM
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function home()
    {
        $this->load->view('/templates/header-api');
        $this->load->view('/templates/footer-api');
    }


}