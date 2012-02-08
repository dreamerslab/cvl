<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist_Model extends CI_Model{

  private $_data;

  public function __construct()
  {
    parent::__construct();

    $data_path = APPPATH."models/artist.yml";
    $this->_data = @file_exists($data_path) ?
      $this->yaml->load($data_path) :
      NULL;
  }

  public function all()
  {
    return $this->_data;
  }
}