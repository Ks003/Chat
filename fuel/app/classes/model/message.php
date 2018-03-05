<?php

class Model_Message extends Model
{
  /**
   * メッセージを格納
   * @param integer $talkRoomId
   */

  public static function addMessageByTalkRoomId($userName,$message,$talkRoomId)
  {
    date_default_timezone_set('asia/tokyo');
    $query = DB::insert('message') -> set(array(
      'user_name' => $userName,
      'comment' => $message,
      'comment_date' => date('Y-m-d G:i:s'),
      'talkroom_id' => $talkRoomId,
    ));
    return $query -> execute();
  }

  /**
  * トークルームIDを元にメッセージを取得
  * @param integer $talkRoomId
  */

  public static function getMessageByTalkRoomId($talkRoomId)
  {
    $query = DB::select() -> from('message') -> where('talkroom_id',0);
    return $query -> execute();
  }
}
