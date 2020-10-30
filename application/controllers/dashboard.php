<?php 

class Dashboard extends CI_Controller{

    public function index(){

        $this->load->view('templates_buyer/header');
        $this->load->view('templates_buyer/navbar_content');
        $this->load->view('buyer/dashboard');
        $this->load->view('templates_buyer/footer');
    }
    public function login(){
        $this->load->view('templates_buyer/header');
        $this->load->view('templates_buyer/navbar_content');
        $this->load->view('buyer/login');
        $this->load->view('templates_buyer/footer');
    }
    public function register(){
        $this->load->view('templates_buyer/header');
        $this->load->view('templates_buyer/navbar_content');
        $this->load->view('buyer/register');
        $this->load->view('templates_buyer/footer');
    }
}