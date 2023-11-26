<?php
include_once('layouts/header_links.php');
$query = "SELECT * FROM location";
$result = mysqli_query($__conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information of Medicine</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }


        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .card {
            border-radius: .5rem;
        }

        .table-scroll {
            border-radius: .5rem;
        }

        thead {
            top: 0;
            position: sticky;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #243b55;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #141e30;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body>

    <body style="background-color: #1d1d1d;">
        <div class="container">

            <div class="row">
                <div class="col-md-12 mb-5">
                    <h1 class="text-center mt-5 text-white">Details of Medicine</h1>
                </div>
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-0">
                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 550px">
                                <table class="table mb-0">
                                    <thead style="
                  background: #141e30;
                  background: -webkit-linear-gradient(
                    to right,
                    #243b55,
                    #141e30
                  );
                  background: linear-gradient(to right, #243b55, #141e30);
                  width: 100%;
                ">
                                        <tr class="text-uppercase text-light">
                                            <th>Med ID</th>
                                            <th>Med name</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($rows = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $rows['med_id']; ?></td>
                                            <td><?php echo $rows['med_name']; ?></td>
                                        </tr>
                                    <?php } ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>