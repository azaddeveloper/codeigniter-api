<?php
// use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php'); 
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/Format.php'; 
// echo APPPATH.'/libraries/REST_Controller.php';
// die;
// use Restserver\Libraries\REST_Controller;
class Api extends REST_Controller
{
	
	function __construct()
	{
		 parent ::__construct();
	}
	public function user_get(){
		$this->response([
         'response' => 'error',
         'message' => 'Invalid username & password'
         ], REST_Controller::HTTP_OK);
	}
}
?>