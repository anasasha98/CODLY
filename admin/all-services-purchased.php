<?php

include 'include/header.php';
include '../forms/connection.php';


if (isset($_POST['delservice'])) {
    $service_id  = $_POST['delservice'];



    $query = "DELETE FROM `purchase_list` WHERE `Purchase ID` ='$service_id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script language="javascript">';
        echo 'alert("Purchase Service deleted successfully")';
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
        "SELECT * FROM `purchase_list` WHERE CONCAT(`Purchase ID`,`captain-username`,`Customer Username`,`Service Name`)  LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `purchase_list`";
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
        <div class="card-header">All Services Purchase</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <form method="post">
                    <div class="active-cyan-4 mb-4">
                        <input class="form-control" type="text" placeholder="Purchasrd Service ID Or Customer Name Or Captain Name Or Service Name " name="valueToSearch" aria-label="Search">
                        <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
                    </div>
                </form>
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Purchasrd Service ID</th>
                            <th>Customer Name</th>
                            <th>Captain Name</th>
                            <th>Service ID</th>
                            <th>Service Name</th>
                            <th>Price</th>
                            <td>Payment method</td>
                            <th>Date</th>
                            <th>Count Report</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                            <tr>
                                <td><?php echo $row['Purchase ID']; ?></td>
                                <td><?php echo $row['Customer Username']; ?></td>
                                <td><?php echo $row['captain-username']; ?></td>
                                <td><?php echo $row['Service ID']; ?></td>
                                <td><?php echo $row['Service Name']; ?></td>
                                <td><?php echo $row['Price']; ?></td>
                                <td><?php echo $row['method']; ?></td>
                                <td><?php echo $row['Date']; ?></td>
                                <td><?php echo $row['Report']; ?></td>

                                <td>
                                    <div class="badge badge-success"><?php echo $row['Status']; ?>
                                    </div>
                                </td>
                                <td>
                                    <form method="post">
                                        <a href="deletelink" onclick="return confirm('Are you sure?')"><button type="submit" name="delservice" value="<?= $row['Purchase ID'];  ?>" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button></a>
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