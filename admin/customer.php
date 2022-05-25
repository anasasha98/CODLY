<?php
include 'include/header.php';
include '../forms/connection.php';

if (isset($_POST['delateCustomer'])) {
    $customer_username = $_POST['delateCustomer'];
    $query = "DELETE FROM customer WHERE customerusername='$customer_username'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION["message"] = "Customer deleted successfully";
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
                <span>All Customer</span>
            </h1>



        </div>
    </div>
</div>
<!--Start Table-->
<div class="container-fluid mt-n10">
    <?php include('include/message-delete.php'); ?>
    <div class="card mb-4">

        <div class="card-header">All Customer</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Customer First Name</th>
                            <th>Customer Last Name</th>
                            <th>Customer Username</th>
                            <th>Customer Email</th>
                            <th>Customer Phone Number</th>

                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../forms/connection.php';
                        $query = " SELECT * FROM  customer ";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                                echo  "<tr>";
                                echo "<td>" . $row['firstname'] . "</td>";
                                echo "<td>" . $row['lastname'] . "</td>";
                                echo "<td>" . $row['customerusername'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phonenumber'] . "</td>";
                        ?>
                                <td>
                                    <form method="post">
                                        <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="delateCustomer" value="<?= $row['customerusername'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
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




                        <!--  <tr>
                            <td>1</td>
                            <td>Customer Name</td>
                            <td>emai.com</td>
                            <td>Registered Date</td>
                            <td>
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Customer Name</td>
                            <td>emai.com</td>
                            <td>Registered Date</td>
                            <td>
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Table-->
<?php include("include/footer.php"); ?>