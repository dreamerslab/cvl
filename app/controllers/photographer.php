<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photographer extends MY_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Photographer_Model');
  }

  public function index($name, $type, $page)
  {
    $data['nav_selected'] = $name;
    $data['contact_url']  = 'contact';
    $data['contact_text'] = 'Contact us';
    $data['photographer'] = $this->Photographer_Model->find($name);
    $data['type']         = $type;
    $data['page']         = $page;
    $data['pages']        = count($data['photographer']['portfolio'][$type]);

    if( $data['page'] > $data['pages']) $page = $data['page'] = $data['pages'];

    $data['img_prefix'] = "/img/photographer/{$name}/{$type}/{$page}/";
    $data['url_prefix'] = "/photographer/{$name}/{$type}/";
    $data['from']       = "?from=photographer/{$name}/{$type}/{$page}";

    $this->view->render($data);
  }
}
