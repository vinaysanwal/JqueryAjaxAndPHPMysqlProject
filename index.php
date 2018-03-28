<!DOCTYPE html>
<html>
  <head>
    <title>JqueryAndAjax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url:"date.php",
        data:"",
        dataType:"text",
        success: function(strDate) {
           $('#show_date').text(strDate)
        }
      })
    })
    </script>
</head>
<body>
  <h1>Ajax and PHP and MYSQL => Introduction</h1>
  <div id="show_date">l</div>
</body>
</html>
