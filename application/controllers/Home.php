<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mymodel');
    }
    public function index() {
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Home',
            'subpage' => 'home',
        );
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}