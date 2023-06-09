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
// search

if (isset($_POST['search'])) {

  $valueToSearch = $_POST['valueToSearch'];
  // search in all table columns
  // using concat mysql function
  $query =
    "SELECT * FROM `service-provider` WHERE CONCAT(`captainusername`,`service_id`,`job_title`)  LIKE '%" . $valueToSearch . "%'";
  $search_result = filterTable($query);
} else {
  $query = "SELECT * FROM `service-provider`";
  $search_result = filterTable($query);
}


function filterTable($query)
{
  include '../forms/connection.php';
  $filter_Result = mysqli_query($con, $query);
  return $filter_Result;
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
    <div class="card-body" style="overflow-x: scroll;">
      <div class="datatable table-responsive">
        <form method="post">
          <div class="active-cyan-4 mb-4">
            <input class="form-control" type="text" placeholder="Filter for Captain Username Or Job Titale Or Service ID" name="valueToSearch" aria-label="Search">
            <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
          </div>
        </form>

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

              <th>Image3</th>

              <th>Price1</th>
              <th>Price2</th>
              <th>Price3</th>

              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php while ($row = mysqli_fetch_array($search_result)) : ?>
              <tr>
                <td><?php echo $row['service_id']; ?></td>

                <td><?php echo $row['captainusername']; ?></td>
                <td><?php echo "wait" ?></td>
                <td><?php echo $row['job_title']; ?></td>
                <td><?php echo $row['job_desc']; ?></td>
                <td><?php echo $row['publish_date']; ?></td>
                <td><?php echo $row['views']; ?></td>
                <td><?php if ($row['image1'] == '') {
                      echo '<img width="150" height="150" src="assets/img/serviceicons.png">';
                    } else {
                      echo $ext = pathinfo($row['image1'], PATHINFO_EXTENSION);
                      echo '<img width="150" height="150" src="data:image/' . $ext . ';base64,' . base64_encode($row['image1']) . '" />';
                    } ?></td>
                <td><?php if ($row['image2'] == '') {
                      echo '<img width="150" height="150" src="assets/img/serviceicons.png">';
                    } else {
                      echo $ext = pathinfo($row['image2'], PATHINFO_EXTENSION);
                      echo '<img width="150" height="150" src="data:image/' . $ext . ';base64,' . base64_encode($row['image2']) . '" />';
                    } ?> </td>
                <td><?php if ($row['image3'] == '') {
                      echo '<img width="150" height="150" src="assets/img/serviceicons.png">';
                    } else {
                      echo $ext = pathinfo($row['image3'], PATHINFO_EXTENSION);
                      echo '<img width="150" height="150" src="data:image/' . $ext . ';base64,' . base64_encode($row['image3']) . '" />';
                    } ?></td>

                <td><?php echo $row['price1'] . '$'; ?></td>
                <td><?php echo $row['price2'] . '$'; ?></td>
                <td><?php echo $row['price3'] . '$'; ?></td>






                <td>
                  <form method="post">
                    <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="delservice" value="<?= $row['service_id'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
                  </form>
                </td>
              </tr>
            <?php endwhile; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--End Table-->

<?php include("include/footer.php"); ?>