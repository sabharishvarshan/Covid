<?php include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <link rel="stylesheet" href="style.css">
  <script src="main.js"></script>

  <!-- Chart.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

  <title>Covid-19 Tracker India</title>
</head>

<body>

  <div class="container-fluid bg-info p-5 text-center my-0">
    <h1 class="">Covid-19 Tracker India</h1>
    <h5 class="text-muted">
      A Website to keep track of all the COVID-19 cases around the India
    </h5>
  </div>

  <div class="container my-5">
    <div class="row text-center">
      <div class="col-3 text-warning">
        <h5>Confirmed</h5>
        <p id="confirmed"></p>
      </div>
      <div class="col-3 text-info">
        <h5>Active</h5>
        <p id="active"></p>
      </div>
      <div class="col-3 text-success">
        <h5>Recovered</h5>
        <p id="recovered"></p>
      </div>
      <div class="col-3 text-danger">
        <h5>Deceased</h5>
        <p id="deaths"></p>
      </div>
    </div>
  </div>

  <div class="container bg-light p-3 my-5 text-center">
    <h5 class="text-info">"Prevention is the Cure."</h5>
    <p class="text-muted">Stay Indoors Stay Safe.</p>
  </div>
  <canvas id="myChart"></canvas>;

  <div class="container text-center my-5">
    <h6 class="text-info">
      *Click on the Confirmed/Recovered/Deaths buttons above to see the chart
      individually.*
    </h6>
  </div>
</body>
<?php 
include 'footer.php'
?>
</html>
