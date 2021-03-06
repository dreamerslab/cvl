<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{
  
  private $_data;
  
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    
    $this->_data['nav_selected'] = '';
    $this->_data['contact_url']  = $this->input->get('from', TRUE);
    $this->_data['contact_text'] = 'Go back';
    $this->_data['from']         = '';
  }
  
  public function index()
  {
    
    // render action view
    $this->view->render($this->_data);
  }

  public function send()
  {

    $this->load->model('Contact_Model');

    // if the form data is not valid
    if($this->Contact_Model->validate() == FALSE){

      // use 'index 'action view configs as this action view configs
      // to show errors(render page)
      $this->view->set('action', 'index')->render($this->_data);
    }else{

      // if the form data is valid,
      // assign param 'ajax' to var 'ajax'
      $ajax = $this->input->is_ajax_request();

      // if the msg is sent
      if($this->Contact_Model->send() == TRUE){

        // and is asking for json format reply,
        // reply to client with json format
        if($ajax){
          $this->_render_json(array('success'=>TRUE));
        }else{

          // otherwise use 'sent' action view configs as this action view configs
          // to render view(render page)
          $this->view->set('action', 'sent')->render($this->_data);
        }
      }else{

        // if the msg is not sent, log the error message and reply to the client
        log_message('error', 'ERROR: /contact/send \n'.$this->email->print_debugger());
        
        // reply json string for ajax call
        if($ajax){
          $this->_render_json(array('success'=>FALSE));
        }else{

          // or use 'error' action view configs as this action view configs
          // to show errors(render page)
          $this->view->set('action', 'error')->render($this->_data);
        }
      }
    }
  }

// -----------------------------------------------------------------------------
  
  private function _render_json($json){
    header('Content-type: application/json');
    echo json_encode($json);
  }
  
}
// End of Contact class

/* End of file contact.php */
/* Location: ./app/controllers/contact.php */
