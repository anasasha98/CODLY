  <?php
  // session_start();
  include("include/header.php");
  include '../forms/connection.php';

  if (isset($_POST['reply'])) {
    $id = $_POST['id'];
    $replymessage = $_POST['text_replay'];

    $chnage = "UPDATE `complaint-user` SET `replymessage`='$replymessage' WHERE `complaint-id` = '$id'";
    $info = mysqli_query($con, $chnage);
    if ($info) {
      echo '<script language="javascript">';
      echo 'alert("Message Has Been Sent.")';
      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Message Not Updated.")';
      echo '</script>';
    }
  }


  if (isset($_POST['deletemessage'])) {
    $complaint = $_POST['deletemessage'];


    $query = "DELETE FROM `complaint-user` WHERE `complaint-id`='$complaint'";
    $result = mysqli_query($con, $query);
    if ($result) {
      echo '<script language="javascript">';
      echo 'alert("message deleted successfully")';
      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Something Wrong!")';
      echo '</script>';
    }
  }



  ?>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      document.querySelectorAll('img').forEach(function(img) {
        img.onerror = function() {
          this.style.display = 'none';
        };
      })
    });
  </script>
  <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
      <div class="page-header-content">
        <h1 class="page-header-title">
          <div class="page-header-icon"><i data-feather="mail"></i></div>
          <span>Complaint Messages</span>
        </h1>
      </div>
    </div>
  </div>
  <!--Start Table-->
  <div class="container-fluid mt-n10">
    <div class="card mb-4">
      <div class="card-header">All Complaint</div>
      <div class="card-body">
        <div class="datatable table-responsive">
          <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Username</th>
                <th>Captain Username</th>

                <th>Complaint Message</th>
                <th>Image</th>
                <th>Date</th>
                <th>Send Reply</th>

                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../forms/connection.php';
              $query = " SELECT * FROM  `complaint-user` ";
              $result = mysqli_query($con, $query);
              if ($result) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                  <tr>
                    <td ><?php echo $row['complaint-id']; ?></td>
                    <td ><?php echo $row['customer-username']; ?></td>
                    <td ><?php echo $row['captin-username']; ?></td>
                    <td ><?php echo $row['complaint-details']; ?></td>
                    <td ><?php if ($row['image'] == '') {
                                        echo '<img width="150" height="150" src="assets/img/defult_serv.png">';
                                      } else {
                                        echo $ext = pathinfo($row['image'], PATHINFO_EXTENSION);
                                        echo '<img width="150" height="150" src="data:image/' . $ext . ';base64,' . base64_encode($row['image']) . '" />';
                                      } ?></td>

                    <td ><?php echo $row['date']; ?></td>
                    <td>
                      <div class=" form-group">
                        <form method="POST">
                          <input type="hidden" name="id" value="<?php echo $row['complaint-id']; ?>">
                          <label for="reply">Send Reply</label>
                          <div>
                            <textarea class="form-control" id="text_replay" name="text_replay" rows="2"></textarea>
                            <button type="submit" name="reply" class="btn btn-primary">Send Reply</button>
                          </div>

                        </form>
                      </div>

                    </td>

                    <td>

                      <form method="post">
                        <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="deletemessage" value="<?= $row['complaint-id'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
                      </form>
                    </td>
                  </tr>
              <?php   }
              }

              ?>



            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  <!--End Table-->


  <?php include("include/footer.php"); ?>