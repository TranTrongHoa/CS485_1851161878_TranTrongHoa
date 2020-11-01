
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
    
  <form class="form-horizontal" action='add.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">    
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">About</label>
      <div class="controls">
        <textarea name="about"  cols="30" rows="3"></textarea>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">salary</label>
      <div class="controls">
        <input type="text" name="salary" >
      </div>
    </div>
 
    <label class="control-label" for="password">gender</label>
<div class="control-group">

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
  <label class="form-check-label" for="inlineRadio1">male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
  <label class="form-check-label" for="inlineRadio2">femal</label>
</div>
    </div>


    <div class="control-group">
    <label class="control-label" for="password">date</label>
      <div class="controls">
        <input type="date" name="date">
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