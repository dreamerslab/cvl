<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Film extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    // add class 'selected' to navigation menu
    $data['nav_selected'] = 'film';
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['from']         = '?from=film';
    $this->view->render($data);
  }
}