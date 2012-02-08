<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artists extends MY_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Artist_Model');
  }

  public function index($type, $page)
  {
    // add class 'selected' to navigation menu
    $data['nav_selected'] = 'artists';
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['artists']      = $this->Artist_Model->all();
    $data['type']         = $type;
    $data['page']         = $page;
    $data['pages']        = count($data['artists'][$type]);

    if( $data['page'] > $data['pages']) $page = $data['page'] = $data['pages'];

    $data['img_prefix'] = "/img/artists/{$type}/{$page}/";
    $data['url_prefix'] = "/artists/{$type}/";
    $data['from']       = "?from=artists/{$type}/{$page}";

    $this->view->render($data);

  }
}
