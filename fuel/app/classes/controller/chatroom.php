<?php

class Controller_ChatRoom extends Controller_Template
{
  public function before()
  {
    parent::before();
  }

  public function action_index()
  {
    $this->template->content = View::forge('partial/chat');
  }

}
