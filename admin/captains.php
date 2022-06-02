<?php
include 'include/header.php';
include '../forms/connection.php';

if (isset($_POST['deleteCaptain'])) {
    $captain_username = $_POST['deleteCaptain'];
    $query = "DELETE FROM captain WHERE captainusername='$captain_username'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION["message"] = "captain deleted successfully";
    } else {
        $_SESSION["message"] = "Something Wrong!";
    }
}


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
        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="users"></i></div>
                <span>All captain</span>
            </h1>



        </div>
    </div>
</div>
<!--Start Table-->
<div class="container-fluid mt-n10">

    <?php include('include/message-delete.php'); ?>
    <div class="card mb-4">

        <div class="card-header">All captain</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <form method="post">
                    <div class="active-cyan-4 mb-4">
                        <input class="form-control" type="text" placeholder="Filter for captain" name="valueToSearch" aria-label="Search">
                        <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
                    </div>
                </form>
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Captain First Name</th>
                            <th>Captain Last Name</th>
                            <th>Captain User Name</th>
                            <th>User Email</th>
                            <th>User Phone Number</th>
                            <th>Birth Date</th>
                            <th>Major</th>
                            <th>Introude Yourself</th>
                            <th>Attachment</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['captainusername']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['major']; ?></td>
                                <td><?php echo $row['bio']; ?></td>
                                <td><?php echo $row['attach']; ?></td>


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