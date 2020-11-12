<div class="container">
      <div class="row mt-3">
        <div class="col-6 mb-2">
          <h1>Manager users</h1>
        </div>
        <div class="col-6 mb-2">
          <a name="" id="" class="btn btn-success float-right" href="register.php" role="button">+ Add new Employee</a>
        </div>
        <table class="table table-dark table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Created_at</th>
              <th>Updated_at</th>
              <th>Action</th>
            </tr>
          </thead>
        <?php
          require 'includes/config.php';
          require 'includes/function.php';
          $user = getAllUser();
          foreach ($user as $row) {
        ?>

            <tbody>
              <tr>
                <td><?php echo $row['0']; ?></td>
                <td><?php echo $row['1']; ?></td>
                <td><?php echo $row['2']; ?></td>
                <td><?php echo $row['3']; ?></td>
                <td><?php echo $row['5']; ?></td>
                <td><?php echo $row['6']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['0']; ?>"><i class="fa fa-pencil mr-2"></i></a>
                    <a onclick="confirm_delete()" href="#" class="delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>
      </div>
    </div>