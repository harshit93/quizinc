<?php

class Controller_Quiz extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/index', $data);
	}
        
        public function action_online()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/season', $data);
	}
        
        public function action_local()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/season', $data);
	}
        
        public function action_flyers()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/season', $data);
	}
        
        
        public function action_season()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/season', $data);
	}
        
        public function action_team()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Quiz &raquo; Index';
		$this->template->content = View::forge('quiz/team', $data);
	}

}
