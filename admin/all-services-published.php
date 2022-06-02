<?php include("include/header.php"); ?>
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
                    <tfoot>
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
                        </tr>
                    </tfoot>
                    <tbody>
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
                                <button class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
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