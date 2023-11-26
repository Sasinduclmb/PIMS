<?php
include_once('layouts/header_links.php');
$query = "select p.med_id, q.med_name, p.in_total, p.out_total from ( select x.med_id, x.in_total,y.out_total from (SELECT m.med_id,SUM(m.quantity) AS in_total FROM in_med m where YEAR(m.date_time) = YEAR(sysdate()) GROUP BY m.med_id) X LEFT JOIN (SELECT b.med_id,SUM(b.quantity) AS out_total FROM out_med b where YEAR(b.date_time) = YEAR(sysdate()) GROUP BY b.med_id) y on x.med_id= y.med_id 
UNION 
select y.med_id, x.in_total,y.out_total from (SELECT m.med_id,SUM(m.quantity) AS in_total FROM in_med m where YEAR(m.date_time) = YEAR(sysdate()) GROUP BY m.med_id) X RIGHT JOIN (SELECT b.med_id,SUM(b.quantity) AS out_total FROM out_med b where YEAR(b.date_time) = YEAR(sysdate()) GROUP BY b.med_id) y on x.med_id= y.med_id)p , location q where p.med_id= q.med_id";
$result = mysqli_query($__conn, $query);
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Annual report</title>
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
	</style>
</head>

<body>

	<body style="background-color: #1d1d1d;">
		<div class="container">

			<div class="row">
				<div class="col-md-12 mb-5">
					<h1 class="text-center mt-5 text-white">Annual Report </h1>
				</div>

				<div class="col-md-12">
					<div class="card shadow-2-strong">
						<div class="card-body p-0">
							<div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true">
								<table class="table mb-0">
									<thead style="
                background: #0575e6; 
                background: -webkit-linear-gradient(
                  to right,
                  #021b79,
                  #0575e6
                ); 
                background: linear-gradient(
                  to right,
                  #021b79,
                  #0575e6
                ); 
              ">
										<tr class="text-uppercase text-light">
											<th>ID</th>
											<th>Name</th>
											<th>IN Total</th>
											<th>OUT Total</th>
										</tr>
									</thead>
									<?php
									while ($rows = mysqli_fetch_array($result)) {
										echo "<tr>";
										echo "<td>" . $rows['med_id'] . "</td>";
										echo "<td>" . $rows['med_name'] . "</td>";
										echo "<td>" . $rows['in_total'] . "</td>";
										echo "<td>" . $rows['out_total'] . "</td>";
										echo "</tr>";
									}
									?>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</body>

</html>