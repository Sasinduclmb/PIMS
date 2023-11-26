<?php
include_once('layouts/header_links.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monthly report</title>
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
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
      <div class="row my-5 align-items-center">
        <div class="col-md-12 text-center mb-5">
          <h1 class="text-center fw-bold">Report Analysis</h1>
        </div>

        <div class="col-md-4">
          <div class="card text-center text-white bg-success mb-3 shadow-lg" style="
                background: #134e5e;
                background: -webkit-linear-gradient(to right, #71b280, #134e5e);
                background: linear-gradient(to right, #71b280, #134e5e);
              ">
            <div class="card-body">
              <h5 class="card-title fw-bold">Daily Report</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
              <a href="daily.php" class="btn btn-light">Go</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center card text-white bg-danger mb-3 shadow-lg" style="
                background: #ff416c;
                background: -webkit-linear-gradient(to right, #ff4b2b, #ff416c);
                background: linear-gradient(to right, #ff4b2b, #ff416c);
              ">
            <div class="card-body">
              <h5 class="card-title fw-bold">Monthly Report</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
              <a href="monthly.php" class="btn btn-light">Go</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center card text-white bg-primary mb-3 shadow-lg" style="
                background: #0575e6; /* fallback for old browsers */
                background: -webkit-linear-gradient(
                  to right,
                  #021b79,
                  #0575e6
                ); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(
                  to right,
                  #021b79,
                  #0575e6
                ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
              ">
            <div class="card-body">
              <h5 class="card-title fw-bold">Annual Report</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
              <a href="annual.php" class="btn btn-light">Go</a>
            </div>
          </div>
        </div>
        <div class="row my-5">
          <div class="col-md-6">
            <div class="card text-center text-white mb-3 shadow-lg" style="
                  background: #141e30;
                  background: -webkit-linear-gradient(
                    to right,
                    #243b55,
                    #141e30
                  );
                  background: linear-gradient(to right, #243b55, #141e30);
                  width: 100%;
                ">
              <div class="card-body">
                <h5 class="card-title fw-bold">Full Detail with Income</h5>
                <p class="card-text">
                  Contains the time entered and all entires.
                </p>
                <a href="detailsofdailyin.php" class="btn btn-light">Go</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card text-center text-white shadow-lg" style="
                  background: #141e30;
                  background: -webkit-linear-gradient(
                    to right,
                    #243b55,
                    #141e30
                  );
                  background: linear-gradient(to right, #243b55, #141e30);
                  width: 100%;
                ">
              <div class="card-body">
                <h5 class="card-title fw-bold">
                  Fully Details with Outgoing
                </h5>
                <p class="card-text">
                  Contains the time entered and all Outgoing.
                </p>
                <a href="detailsofdailyout.php" class="btn btn-light">Go</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>