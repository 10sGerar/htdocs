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
// display php error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// connect to database
$conn = mysqli_connect('localhost', 'id18111443_gerardo', '2X@=af@<2&bZDsAr', 'id18111443_chargebacks');

// check connection
if(!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}

// Write query for rep using last name
$sql = "SELECT * FROM tbl_Reps WHERE LastName='Hooban'";

// Make query & get results
$result = mysqli_query($conn, $sql);

// Fetch the resulting Columns as an array
$rep = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($rep);

/*// Free results from memory
mysqli_free_results($result);

// Close database connection
mysqli_close($conn);*/



echo "<h1>" . "(" . $rep[0]['RepID'] . ")" . " " . $rep[0]['FirstName'] . " " . $rep[0]['LastName'] . "</h1>";
?>

<!-- REP INFO STARTS HERE -->
<div class='reptable'>Registered/NRF</div>
<div class='reptable'>Office</div>
<div class='reptable'>W2</div>
<div class='reptable'>1099</div>
<div class='reptable'>Gross Commission</div>
<div class='reptable'>Disclosure</div>
<div class='reptable'>Role</div>
<!--<table class="table table-bordered">
    <thead>
        <tr>
            <th scope='col'>Registered/NRF</th>
            <th scope='col'>Office</th>
            <th scope='col'>W2</th>
            <th scope='col'>1099</th>
            <th scope='col'>Gross Commission</th>
            <th scope='col'>Disclosure</th>
            <th scope='col'>Role</th>
        <tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $rep[0]['RegisteredNRF']?></td>
            <td><?php echo $rep[0]['OfficeID']?></td>
            <td><?php echo $rep[0]['W2']?></td>
            <td><?php echo $rep[0]['1099']?></td>
            <td><?php echo $rep[0]['GrossComm']?></td>
            <td><?php echo $rep[0]['Disclosure']?></td>
            <td><?php echo $rep[0]['RoleID']?></td>
        </tr>
    </tbody>
</table>-->
<div class="container">
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