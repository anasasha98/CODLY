<?php
// session_start();
include("include/header.php");
include '../forms/connection.php';
if (isset($_POST['deletemessage'])) {
    $username = $_POST['deletemessage'];
    $query = "DELETE FROM contact WHERE username='$username'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION["message"] = "message deleted successfully";
    } else {
        $_SESSION["message"] = "Something Wrong!";
    }
}


?>
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="mail"></i></div>
                <span>Messages</span>
            </h1>
        </div>
    </div>
</div>
<!--Start Table-->
<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">All Message</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../forms/connection.php';
                        $query = " SELECT * FROM  `contact` ";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

                                <tr>

                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['subject']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td>date</td>
                                    <td>
                                        <form method="post">
                                            <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="deletemessage" value="<?= $row['username'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
                                        </form>
                                    </td>
                                </tr>
                        <?php   }
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Table-->
<?php include("include/footer.php"); ?>