<?php
require(APPPATH.'/libraries/REST_Controller.php');

// use Restserver\Libraries\REST_Controller;
class API extends REST_Controller
{
	
	function __construct()
	{
		 parent ::__construct();
	}
	public function index_get(){
		$this->response([
         'response' => 'error',
         'message' => 'Invalid username & password'
         ], REST_Controller::HTTP_OK);
	}
}
?>