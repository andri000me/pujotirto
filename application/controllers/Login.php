<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {

        $this->load->view('backend/vw_login');
        
    }

}

/* End of file Login.php */
