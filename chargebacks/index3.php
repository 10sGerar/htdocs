<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysql_connect("localhost", "root", "root", "chargebacks");
 
// Check connection
if($link === false){
    echo "Not connected";
} else {
    echo "Connected";
    exit;
}
 
// Attempt select query execution
$sql = "SELECT * FROM tbl_Reps WHERE LastName='Hooban'";



$results = mysql_fetch_assoc($sql);

if (!$results) {
    echo "<p>There are no Reps with that last name";

} else {
    echo "there are results";
    exit;
    echo "<h1>" . $results["RepID"] . " " . $results['FirstName'] . " " . $results['LastName'] . "</h1>";
    echo "<p>" . $results["1099"] . "</p>";

}

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        $results = mysqli_fetch_array($result);
        echo "<h1>" . $results['FirstName'] . " " . $results['LastName'] . "</h1>";
        echo $result;
        echo "<table class='table'>";
            echo "<tr>";
                echo "<th>RepID</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Registered NRF</th>";
                echo "<th>Office ID</th>";
                echo "<th>W2</th>";
                echo "<th>1099</th>";
                echo "<th>Gross Commission</th>";
                echo "<th>Disclosure</th>";
                echo "<th>Role ID</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['RepID'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['RegisteredNRF'] . "</td>";
                echo "<td>" . $row['OfficeID'] . "</td>";
                echo "<td>" . $row['W2'] . "</td>";
                echo "<td>" . $row['1099'] . "</td>";
                echo "<td>" . $row['GrossComm'] . "</td>";
                echo "<td>" . $row['Disclosure'] . "</td>";
                echo "<td>" . $row['RoleID'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<div>

</div>
<div container>
    <!-- CHARGEBACK CATEGORIES TABS START -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Chargeback 1</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Chargeback 2</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Chargeback 3</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">This is the home chargeback 1 contnet</div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">This is the home chargeback 2 contnet</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">This is the home chargeback 3 contnet</div>
    </div>
    <!-- CHARGEBACK CATEGORIES TABS ENDS -->
    <form>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>