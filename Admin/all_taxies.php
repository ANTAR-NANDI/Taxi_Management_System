<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-5">

                </div>
                <div class="col-sm-2">
                    <h1 class="m-0"><span class="badge badge-info">All Taxies</span></h1>

                </div><!-- /.col -->
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">All Taxies</li>
                    </ol>
                </div><!-- /.col -->
            </div>
            <hr>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example">
                        <thead style="background-color: #e6e6e6">
                            <tr>
                                <th>ID</th>
                                <th>Taxi-Code</th>
                                <th>Registration Number</th>
                                <th>Vehicle Rent</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <?php
                        $sl = 1;
                        include("../db/connection.php");
                        $sql = "select id,taxi_code,reg_no,v_rent,engage from taxies";
                        $r = $conn->query($sql);

                        while ($row = mysqli_fetch_array($r)) {
                            $taxi_code = $row['taxi_code'];
                            $reg_no = $row['reg_no'];
                            $v_rent = $row['v_rent'];
                            $engage = $row['engage'];
                            $id = $row['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $taxi_code; ?></td>
                                    <td><?php echo $reg_no; ?></td>
                                    <td><?php echo $v_rent; ?></td>
                                   
                                    <?php if ($engage == 1) { ?>
                                        <td>
                                            <span class="badge badge-danger">Engaged</span>
                                        </td>
                                    <?php
                                            } else { ?>

                                        <td>
                                            <span class="badge badge-success">Available</span>
                                        </td>
                                    <?php } ?>
                                    <td><a style="margin-left: 10px" class="btn btn-info" href="edit_taxi.php?id=<?php echo $id ?>">Edit</a>
                                        <a class="btn btn-danger" href="delete_taxi.php?id=<?php echo $id ?>">Delete</a>
                                    </td>

                                </tr>

                            </tbody>
                        <?php

                        }
                        ?>
                    </table>
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php include 'includes/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // dom: 'Bfrtip',
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            "bPaginate": true,
            buttons: [
                // 'copy', 'csv', 'excel', 'pdf', 'print'
                {
                    extend: "copy",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //Your Colume value those you want
                    },
                    className: "btn btn-outline-secondary",
                },
                {
                    extend: "csv",
                    title: "Patients List",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //Your Colume value those you want print
                    },
                    className: "btn btn-outline-secondary",
                },
                {
                    extend: "excel",
                    "className": 'btn btn-table-excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //Your Colume value those you want print
                    },
                    title: "Patients List",
                    className: "btn btn-outline-info",
                },
                {
                    extend: "pdf",
                    customize: function(doc) {
                        doc.content[1].margin = [100, 0, 100, 0] //left, top, right, bottom
                    },
                    exportOptions: {
                        alignment: 'right',
                        columns: [0, 1, 2, 3, 4, 5], //Your Colume value those you want print
                    },

                    title: "Patients List",
                    className: "btn btn-outline-success",
                },
                {
                    extend: "print",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5], //Your Colume value those you want print
                    },
                    title: "Patients List",
                    className: "btn btn-outline-warning",
                },
            ],
            "paging": true,
            "ordering": true,
            //"order": [[ 3, "desc" ]],
            "info": true,
            // "columns": [{
            //         "orderDataType": "dom-text-numeric"
            //     },
            //     {
            //         "orderDataType": "dom-text-numeric"
            //     },
            //     {
            //         "orderDataType": "dom-text-numeric"
            //     },
            //     {
            //         "orderDataType": "dom-text-numeric"
            //     },
            //     {
            //         "orderDataType": "dom-text-numeric"
            //     },

            //     {
            //         "orderDataType": "dom-text-numeric"
            //     },


            // ]
        });
    });
</script>