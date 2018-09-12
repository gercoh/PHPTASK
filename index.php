<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
 <body>

   <form method="post" >
       
   <input type="text" name="comment" placeholder="comment" /><br>
   <input type="submit" name="abc" value="go">
        
    </form>
 
  <marquee behavior="alternate" direction="left" bgcolor="#ffcc00">
  
    <?php
     if (isset($_POST['abc'])) {
        
    
                echo $_POST['comment'];
    }
    ?>

  </marquee>

 </body>
</html>