<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fashion extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index($page)
  {
    // add class 'selected' to navigation menu
    $data['nav_selected'] = 'fashion';
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['artists']      = $this->Fashion_Model->all();
    $data['page']         = $page;
    $data['pages']        = count($data['artists']);

    if( $data['page'] > $data['pages']) $page = $data['page'] = $data['pages'];

    $data['img_prefix'] = "/img/artists/{$page}/";
    $data['url_prefix'] = "/artists/";
    $data['from']       = "?from=fashion/{$page}";

    $this->view->render($data);
  }
}