<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fashion extends MY_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Fashion_Model');
  }

  public function index($page)
  {
    // add class 'selected' to navigation menu
    $data['nav_selected'] = 'fashion';
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['fashion']      = $this->Fashion_Model->all();
    $data['page']         = $page;
    $data['pages']        = count($data['fashion']);

    if( $data['page'] > $data['pages']) $page = $data['page'] = $data['pages'];

    $data['img_prefix'] = "/img/fashion/{$page}/";
    $data['url_prefix'] = "/fashion/";
    $data['from']       = "?from=fashion/{$page}";

    $this->view->render($data);
  }
}