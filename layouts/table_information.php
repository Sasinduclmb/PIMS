<html>
    <body>
<table>
                <tr>
                    <th>Med_ID</th>
                    <th>Store_Condition</th>
                    <th>Amount</th>
                    <th>Manufacture_Date</th>
                    <th>Expire_Date</th>
                    <th>Stock_Location</th>
                </tr>


</body>
</html>


<?php
                $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'pims');


                if (isset($_POST["search"])) {
                    $medname = $_POST["medname"];
                    
                    $sql = "SELECT med_id,store_con,amount,m_date,x_date,st_loc FROM location WHERE med_name='$medname'";

                    $result = $__conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["med_id"] . "</td><td>" . $row["store_con"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["m_date"] . "</td><td>" . $row["x_date"] . "</td><td>" . $row["st_loc"] . "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 result";
                    }
                }

?>
