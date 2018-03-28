<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 3/22/2018
 * Time: 9:17 AM
 */
class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view("layers/head");
        $this->load->view("layers/portfolio");
        $this->load->view("layers/about");
        $this->load->view("layers/articles");
        $this->load->view("layers/contact");
        $this->load->view("layers/footer");
    }

}