<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
  }
  
  public function error_404()
  {
    $this->view->render();
  }

}
// End of Errors class

/* End of file errors.php */
/* Location: ./app/controllers/errors.php */