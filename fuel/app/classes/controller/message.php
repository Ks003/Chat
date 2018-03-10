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
    $params = Input::get();
    Model_Message::addMessageByTalkRoomId($params);
  }

  public function get_readMessage()
  {
    $params = Input::get();
    $result = Model_Message::getMessageByTalkRoomId($params['talkRoomId']);
    $this -> response($result);
  }
}
