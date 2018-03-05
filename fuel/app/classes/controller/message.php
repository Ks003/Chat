<?php

class Controller_Message extends Controller_Rest
{
  protected $format = 'json';

  public function before()
  {
    parent::before();
  }

  public function get_writeMessage()
  {
    $data = Input::get();
    Model_Message::addMessageByTalkRoomId($data['userName'],$data['message'],$data['talkRoomId']);
  }

  public function get_readMessage()
  {
    $data = Input::get();
    $result = Model_Message::getMessageByTalkRoomId($data['talkRoomId']);
    $this -> response($result);
  }
}
