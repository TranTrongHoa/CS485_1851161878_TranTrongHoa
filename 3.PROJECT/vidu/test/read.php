<?php
require_once('connect.php');
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
    <script>
    alert('thêm thành công')
    </script>
    <a href="index.php">add new </a>
      <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>description</th>
                <th>salary</th>
                <th>gender</th>
                <th>birthday</th>
                <th>Create_at</th>
                <th>action</th>
                
            </tr>
        </thead>
        <?php
            $sql="SELECT * FROM employees ORDER BY id";
            $result = mysqli_query($conn, $sql);

            if($result) {
                while ($row=mysqli_fetch_array($result)) {  ?>
            <tr>
                <td><?php echo $row['id']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['description']  ?></td>
                <td><?php echo $row['gender']  ?></td>
                <td><?php echo $row['salary']  ?></td>
                <td><?php echo $row['birthday']  ?></td>
                <td><?php echo $row['created_at']  ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row['id']?>">view</a>
                    <a href="delete.php?id=<?php echo $row['id']?>">del</a>
                    <a href="edit.php?id=<?php echo $row['id']?>">edit</a>
                
                </td>

                
            </tr>

         <?php           
                }
            }
        ?>

    </table>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>