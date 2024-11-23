<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
	public function index()
	{
		$this->load->view('dashboard');
	}
	public function notfound()
	{
		header("Location: https://makdfs.com");
	}

	public function about()
	{
        $this->load->view('commen/about');
	}
	public function contact()
	{
        $this->load->view('commen/contct');
	}
    public function privacy()
	{
        $this->load->view('commen/privacy');
	}
    public function terms()
	{
        $this->load->view('commen/terms');
	}
    public function services()
	{
        $this->load->view('commen/services');
	}


	public function sendmail(){
		$this->load->library('email');
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'medlyfechemist@gmail.com';
		$config['smtp_pass']    = 'mumgedpzliwfrbvs';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;      
		
		$this->email->initialize($config);

		$to =  $this->input->post('to');
		$subject =  $this->input->post('subject');
		$message =  $this->input->post('message');
		
		$this->email->from('medlyfechemist@gmail.com', 'Medlyfechemist');
		$this->email->to($to); 
		$this->email->subject($subject);
		$this->email->message($message);  
		
		$this->email->send();
	}
}
