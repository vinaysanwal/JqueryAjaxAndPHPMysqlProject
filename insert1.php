<!DOCTYPE html>
<html>
  <head>
    <title>JqueryAndAjax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#submit').click(function(event){
        event.preventDefault();
      $.ajax({
        url:"database1.php",
        method:"post",
        data:$('form').serialize(),
        dataType:"text",
        success: function(strMessage) {
           $('#message').text(strMessage)
        }
      }); });
    });
    </script>
</head>
<body>
  <h1>Forms</h1>
  <p id="message"></p>
  <form method="post">
    <label for="name">name:</label>
    <input id="name" type:"text" name="name">
    <label for="email">email:</label>
    <input id="email" type:"email" name="email">
    <label for="contacts">contacts:</label>
    <input id="contacts" type:"contacts" name="contacts">
    <input type="submit" value="save" id="submit">
  </form>
</body>
</html>
