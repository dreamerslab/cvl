<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    $data['nav_selected'] = 'home';
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['from']         = '?from=home';
    $this->view->render($data);
  }
}
