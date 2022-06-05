<?php
session_start();
include 'include/header.php';
include '../forms/connection.php';


if (isset($_POST['deleteCaptain'])) {
    $captain_username = $_POST['deleteCaptain'];
    $query = "DELETE FROM captain WHERE captainusername='$captain_username'";
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
        "SELECT * FROM `captain` WHERE CONCAT(`captainusername`,`firstname`,`lastname`)  LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT captainusername,firstname,lastname,email,phonenumber,dob,major,bio,`attach` FROM captain";
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
        <div class="card-body">
            <div class="datatable table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Captain Name</th>
                            <th>Section Name</th>
                            <th>Service Name</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                            <tr>
                                <td>1</td>
                                <td>Captain name</td>
                                <td>Section name</td>
                                <td>Service name </td>
                                <td>Price</td>
                                <td>Date</td>
                                <td>
                                    <div class="badge badge-success">Published
                                    </div>
                                </td>
                                <td>
                                    <form method="post">
                                        <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="deleteCaptain" value="<?= $row['captainusername'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
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