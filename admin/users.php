<?php include("include/header.php"); ?>
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
    <div class="container-fluid">
        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="users"></i></div>
                <span>All Users</span>
            </h1>



        </div>
    </div>
</div>
<!--Start Table-->
<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">All Users</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Registered on</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>User Name</td>
                            <td>emai.com</td>
                            <td>Registered Date</td>
                            <td>
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>User Name</td>
                            <td>emai.com</td>
                            <td>Registered Date</td>
                            <td>
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--End Table-->
<?php include("include/footer.php"); ?>