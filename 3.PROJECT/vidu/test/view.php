<?php
    $id=$_GET['id'];
    require_once('connect.php');
    $sql="SELECT * FROM employees where id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
  <form class="form-horizontal" action='read.php'>
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">ID</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="<?php echo $row['id']?>" class="input-xlarge">    
      </div>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="<?php echo $row['name']?>" class="input-xlarge">    
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">About</label>
      <div class="controls">
        <textarea name="about"  cols="30" rows="3"   placeholder="<?php echo $row['description']?>"></textarea>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">salary</label>
      <div class="controls">
        <input type="text" name="salary"  placeholder="<?php echo $row['salary']?> VND" >
      </div>
    </div>
 
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Gender</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="<?php if($row['gender']) echo'female'; else echo'male' ?>" class="input-xlarge">    
      </div>
    </div>


    <div class="control-group">
    <label class="control-label" for="password">date</label>
      <div class="controls">
        <input type="text" name="date" placeholder="<?php echo $row['birthday']?>" >
      </div>
    </div>


    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <input type="submit" value="go">
      </div>
    </div>
  </fieldset>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>