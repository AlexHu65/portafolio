<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 7/4/2017
 * Time: 9:41 AM
 */
class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function view($page = 'home')
    {

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }


        $data['title'] = ucfirst($page); // Capitalize the first letter

        if ($page == 'api-rest') {
            $this->load->view('templates/header-api', $data);
            $this->load->view('pages/' . $page, $data);


        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);
        }

    }

}