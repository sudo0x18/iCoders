<?php
echo '
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">LogIn To iCoders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container my-4">
      
      <form action="login.php" method="POST">
      <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" require>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" require>
      </div>
      <input type="submit" value="Submit" class="btn btn-danger">
      </form>
  </div>
  
      </div>
    </div>
  </div>
</div>';
?>