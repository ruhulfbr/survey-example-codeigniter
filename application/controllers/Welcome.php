<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->view('welcome_message');
	}
	public function success(){
		$pdata = array();
		$pdata['lists'] = $this->db->select('*')->from('survey')->get()->result();
		$this->load->view('success',$pdata);
	}
	public function one(){
		// $next = $this->input->post('next');
		$data = array();
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$this->session->set_userdata($data);
		$this->load->view('2');

	}
	public function two(){
		// $next = $this->input->post('next');
		$data = array();
		$data['age'] = $this->input->post('age');
		$data['city'] = $this->input->post('city');
		$this->session->set_userdata($data);
		$this->load->view('3');
	}
	public function three(){
		// $next = $this->input->post('next');
		$data = array();
		$data['phone'] = $this->input->post('phone');
		$data['nation'] = $this->input->post('nation');
		$this->session->set_userdata($data);
		$this->load->view('4');
	}
	public function submit(){
		// $next = $this->input->post('next');
		$data = array();
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['age'] = $this->input->post('age');
		$data['city'] = $this->input->post('city');
		$data['phone'] = $this->input->post('phone');
		$data['nation'] = $this->input->post('nation');
		$data['gender'] = $this->input->post('gender');
		$data['pesha'] = $this->input->post('pesha');
		$this->db->insert('survey',$data);
		redirect('welcome/success');
	}
}
