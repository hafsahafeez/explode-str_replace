<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   <div class="container">

       
  
      <form action="" method="post">
           
           <div class="form-group">
           <label for="input">Input:</label>
           <textarea name="input" id="input" cols="30" rows="10" class="form-control"></textarea>
          
            </div>
            <input type="submit" class="btn btn-primary m-4" value="submit">
            </form>  
            <!-- <div class="form-group"> -->
           <label for="output">Output:</label>
           <textarea name="output" id="output" cols="30" rows="10" class="form-control">

         <?php 
          if(isset($_POST['input']) && $_POST['input'] != ''){
              #code...
        
            $_input = explode(",",$_POST['input']);
            for($i=0; $i < count($_input) ; $i++){ 
                       # code...
                       $item = str_replace("'",'"',$_input[$i]);
                       echo $item ."\n";
                     }

        }
   ?>
    </textarea>
    </div>
   
</body>
</html>

