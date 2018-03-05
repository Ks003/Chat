<div id="container">
  <h1>Chat</h1>
  <div id="talkField">
    <div id="result"></div>
    <br class="clear_balloon"/>
    <div id="end"></div>
  </div>
  <div id="inputField">
    <p>
      Name: <input type="text" name="user" id="user">
      Message: <input type="text" name="message" id="message">
      <input type="button" id="greet" value="send">
    </p>
  </div>
</div>

<?php echo Asset::js("jquery-2.1.4.min.js")?>
<?php echo Asset::js("main.js")?>
