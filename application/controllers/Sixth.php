<?php

class Sixth extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/samples/error-404');
    }

    public function error_404()
    {
        $this->load->view('pages/samples/error-404');
    }

    public function error_500()
    {
        $this->load->view('pages/samples/error-500');
    }
}