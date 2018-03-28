<!DOCTYPE html>
<html>
  <head>
    <title>JqueryAndAjax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#load').click(function(event){
        event.preventDefault();
      $.ajax({
        url:"database2.php",
        dataType: "html",
        success: function(result) {
           $('#result').html(result)
        }
      }); });
    });
    </script>
</head>
<body>
  <h1>Forms</h1>
  <div>
   <form method="post">
     <input type="submit" name="load" id="load" value="Load">
   </form>
   <div id="result"></div>
 </div>
</body>
</html>
