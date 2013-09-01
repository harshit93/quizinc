<?php

class Controller_Quizzitch extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quizzitch &raquo; Index';
		$this->template->content = View::forge('quizzitch/index', $data);
	}

}
