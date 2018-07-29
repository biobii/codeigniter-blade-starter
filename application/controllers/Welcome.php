<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Default method
	 */
	public function index()
	{	
		return view('welcome_message');
	}
}
