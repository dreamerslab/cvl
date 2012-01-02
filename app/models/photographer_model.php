<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photographer_Model extends CI_Model{
  
  private $_data;
  
  public function __construct()
  {
    parent::__construct();
    
    $photographers = array(
      'jack-wang', 'loki-tsai', 'minshi-jiang'
    );
    
    foreach ($photographers as $photographer) {
      $data_path = APPPATH."models/photographer/{$photographer}.yml";
      $this->_data[$photographer] = @file_exists($data_path) ?
        $this->yaml->load($data_path) :
        NULL;
    }
  }

  public function find($name)
  {
    return $this->_data[$name];
  }
}