<?php

include 'include/header.php';
include '../forms/connection.php';


if (isset($_POST['delservice'])) {
  $service_id  = $_POST['delservice'];
  $query = "DELETE FROM `service-provider` WHERE `service_id` ='$service_id'";
  $result = mysqli_query($con, $query);
  if ($result) {
    echo '<script language="javascript">';
    echo 'alert("captain deleted successfully")';
    echo '</script>';
  } else {
    echo '<script language="javascript">';
    echo 'alert("Something Wrong!")';
    echo '</script>';
  }
}



?>
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
  <div class="container-fluid">
    <div class="page-header-content">
      <h1 class="page-header-title">
        <div class="page-header-icon"><i data-feather="layout"></i></div>
        <span>All services</span>
      </h1>
    </div>
  </div>
</div>

<!--Start Table-->
<div class="container-fluid mt-n10">
  <?php include('include/message-delete.php'); ?>
  <div class="card mb-4">
    <div class="card-header">All Services Published</div>
    <div class="card-body">
      <div class="datatable table-responsive">

        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Service ID</th>
              <th>Captain Name</th>
              <th>Section Name</th>
              <th>Job Title</th>
              <th>Job description</th>

              <th>Date</th>
              <th>Viewers</th>
              <th>Image1</th>

              <th>Image2</th>
              <th>
              <th>Image3</th>
              </th>
              <th>Price1</th>
              <th>Price2</th>
              <th>Price3</th>
              <th>Status</th>
              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php
            include '../forms/connection.php';
            $query = " SELECT * FROM  `service-provider` ";
            $result = mysqli_query($con, $query);
            if ($result) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                <tr>
                  <td><?php echo $row['service_id']; ?></td>

                  <td><?php echo $row['captainusername']; ?></td>
                  <td><?php echo "wait" ?></td>
                  <td><?php echo $row['job_title']; ?></td>
                  <td><?php echo $row['job_desc']; ?></td>
                  <td><?php echo $row['publish_date']; ?></td>
                  <td><?php echo $row['views']; ?></td>
                  <td><?php echo $row['image1']; ?></td>
                  <td><?php echo $row['image2']; ?></td>
                  <td><?php echo $row['image3']; ?></td>
                  <td><?php echo $row['price1']; ?></td>
                  <td><?php echo $row['price2']; ?></td>
                  <td><?php echo $row['price3']; ?></td>



                  <td>
                    <div class="badge badge-success">Published
                    </div>
                  </td>
                  <td>
                    <form method="post">
                      <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="delservice" value="<?= $row['service_id'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
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