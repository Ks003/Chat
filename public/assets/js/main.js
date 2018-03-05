$(function(){
    $('#greet').click(function(){
      sendMessage(),
      getMessage()
    });
    //読み込まれたタイミングでチャット内容を表示するため
    getMessage();
    //定期的にメッセージを取得
    getMessageRegularly();

});


/**
 * メッセージを読み書きするAPIを呼び出す
 * @param {string} mode メッセージAPIの呼び出す機能を決める。'read'の時は読み取り、'write'の時は書き込み。
 * @param {array} data APIに渡すパラメータ。読み込み時はtalkRoomId、書き込みはuserName,message,talkRoomId
 */

function callMessageAPI(mode,data){
  return $.ajax({
    url: 'http://localhost/fuelphp/message/' + mode + 'Message',
    type: 'get',
    dataType: 'json',
    data: data,
  })
}

/**
 *メッセージを送信
 */

function sendMessage(){
  if(!$('#user').val() || !$('#message').val()) return;
  var data = {
    userName: $('#user').val(),
    message: $('#message').val(),
    talkRoomId: 0,
  };
  callMessageAPI('write',data);
}

/**
 *メッセージを取得し、画面に表示
 */

function getMessage(){
  var data = {
    talkRoomId: 0,
  };
  callMessageAPI('read',data).then(
    function(response){
      $('#result').html(createChatDOM(response));
    }
  );
}

/**
 *メッセージを画面に出力するためのDOMを生成
 */

function createChatDOM(response){
  var dom = '';
  $.each(response,function(index,val){
    dom += '<div class="user">' + val['user_name'] + '</div><div class="left_balloon">' + val['comment'] + '</div>';
  });
  return dom;
}

/**
 *メッセージを一定間隔で取得
 */

function getMessageRegularly(){

    setTimeout(function(){

        getMessage();
        getMessageRegularly();

    },5000); //リロード時間はここで調整

}
