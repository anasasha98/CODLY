<?php include("include/header.php"); ?>
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
                            <th>ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>user name</td>
                            <td>email.com</td>
                            <td>Subject</td>
                            <td>Details</td>
                            <td>date</td>
                            <td>
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>user name</td>
                            <td>email.com</td>
                            <td>Subject</td>
                            <td>Details</td>
                            <td>date</td>
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