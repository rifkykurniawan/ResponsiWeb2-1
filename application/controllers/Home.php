<?php   
    defined('BASEPATH') OR exit('No direct script access allowed');  
    class Home extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }  
        public function index()
        {
            $data['content'] = $this->load->view('web/home', '', TRUE);
           $this->load->view('template/head_foot', $data, FALSE);
        }
    }   
    /* End of file Controllername.php */
?>