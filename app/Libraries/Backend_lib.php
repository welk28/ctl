<?php 
class Backend_lib{
  private $CI;
  public function __construct(){
    $this->CI = & get_instance();
  }
  public function control(){
    if (!$this->CI->session->userdata('login')) {
      redirect(base_url());
    }
    $url= $this->CI->uri->segment()
  }
}
?>