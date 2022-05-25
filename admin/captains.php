<?php
include 'include/header.php';
include '../forms/connection.php';

if (isset($_POST['delateCaptain'])) {
    $captain_username = $_POST['delateCaptain'];
    $query = "DELETE FROM captain WHERE captainusername='$captain_username'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION["message"] = "Captain deleted successfully";
    } else {
        $_SESSION["message"] = "Something Wrong!";
    }
}


?>
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="users"></i></div>
                <span>All Captain</span>
            </h1>



        </div>
    </div>
</div>
<!--Start Table-->
<div class="container-fluid mt-n10">
    <?php include('include/message-delete.php'); ?>
    <div class="card mb-4">

        <div class="card-header">All Captain</div>
        <div class="card-body">
            <div class="datatable table-responsive">
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
                        <?php
                        include '../forms/connection.php';
                        $query = " SELECT * FROM  captain ";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                                echo  "<tr>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['captainusername'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phonenumber'] . "</td>";
                                echo "<td>" . $row['dob'] . "</td>";
                                echo "<td>" . $row['major'] . "</td>";
                                echo "<td>" . $row['bio'] . "</td>";
                                echo "<td>" . $row['attach'] . "</td>";
                        ?>
                                <td>
                                    <form method="post">
                                        <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="delateCaptain" value="<?= $row['captainusername'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
                                    </form>
                                </td> <?php
                                    }
                                    mysqli_free_result($result);
                                } else {
                                    echo "No records matching your query were found.";
                                }


                                // Close connection
                                mysqli_close($con);
                                        ?>





                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Table-->
<?php include("include/footer.php"); ?>