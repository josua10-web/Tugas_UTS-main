<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['meta']=['title'=>'Beritangoding',];
        $this->load->view('home',$data);
	}
    public function about()
    {
        $data['meta']=['title'=>'About Beritangoding',];
        $this->load->view('about',$data);
    }
    public function contact()
    {
        $data['meta']=['title'=>'Contact Us',];
        if ($this->input->method()=='post'){
            print_r($this->input->post());
        }
        $this->load->view('contact',$data);
    }
}