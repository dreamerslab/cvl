<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function validate()
  {
    $this->load->library('form_validation');

    $config = array(
      array(
        'field' => 'name',
        'rules' => 'required'
      ),
      array(
        'field' => 'email',
        'rules' => 'required|valid_email'
      ),
      array(
        'field' => 'message',
        'rules' => 'required'
      )
    );

    $this->form_validation->set_rules($config);

    return $this->form_validation->run();
  }
  
  public function send()
  {
    $ip = $this->input->ip_address();
    $name = $this->input->post('name', TRUE);
    $email = $this->input->post('email', TRUE);
    $message = "IP: {$ip}\n\n{$this->input->post('message', TRUE)}";

    $this->load->library('email');

    $this->email->from($email, $name);
    $this->email->to('ramon@coverline.com.tw');
    $this->email->subject("[coverline.com.tw]Comments");
    $this->email->message($message);

    return $this->email->send();
  }
}
