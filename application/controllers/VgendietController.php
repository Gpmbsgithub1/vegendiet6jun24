<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VgendietController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function aboutus()
	{
		$this->load->view('aboutus');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function cloud_kitchen()
	{
		$this->load->view('cloud_kitchen');
	}
	public function the_process()
	{
		$this->load->view('the_process');
	}
	public function our_products()
	{
		$this->load->view('our_products');
	}
	public function condition_specific()
	{
		$this->load->view('condition_specific');
	}
	public function contactus()
	{
		$this->load->view('contactus');
	}
	public function send_contact_email(){
		                  $this->form_validation->set_rules('your_mobile', 'Mobile No', 'required|regex_match[/^[0-9]{10}$/]');
                          $this->form_validation->set_rules('your_email', 'Email', 'trim|valid_email');
			              $this->load->library('email');
				                $config['protocol']    = 'smtp';
						        $config['smtp_host']    = 'smtp.zoho.in';
						        $config['smtp_port']    = '465';
						        $config['smtp_crypto'] = 'ssl';
						        $config['smtp_timeout'] = '30';
						        $config['smtp_user']    = 'info@vgendiet.com';
						        $config['smtp_pass']    = '3mpRCjfUY45f';
						        $config['charset']    = 'utf-8';
						        $config['newline']    = "\r\n";
						        $config['mailtype'] = 'html';  
						        $config['validation'] = TRUE;    

						        $this->email->initialize($config);
						        $to=$this->input->post('your_email');
						        //$subject=$this->input->post('subject');
						        $message=$this->input->post('your_message');
						      
						        $this->email->from('info@vgendiet.com', 'Veegen Diet Care');
						        $this->email->to($to); 
						        $this->email->reply_to('info@vgendiet.com');
								$this->email->subject('Contact Enquiry Mail');
						        $this->email->message($message);  
						        if($this->form_validation->run() == true){
			                    if($this->email->send())
						        {
					             $this->session->set_flashdata("email_sent_enquiry","Congragulation Email Send Successfully.");
					              
					              $this->load->view('contactus');
					            
					             }else{
					             $this->session->set_flashdata("email_sent_enquiry","You have encountered an error");
					              //echo $this->email->print_debugger();
					             
					              $this->load->view('contactus');
					            

					             }
					             //$this->load->view('formsuccess');
					            
					        
					           }else{

					             //$this->session->set_flashdata("error","Some problems occured, please try again.");
					            $this->load->view('contactus');
					        
					           }
					           
    }
}
