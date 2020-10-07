<?php
// Retrieving Json Data
$jsonData = file_get_contents("https://api.covid19india.org/data.json");
$data = json_decode($jsonData, true);
include 'header.php'
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
  <title>Covid-19 Tracker India</title>
</head>

<body>
  <div>

</div>
  <div class="container-fluid bg-info p-5 text-center my-0">
    <h1 class="">Covid-19 Tracker India</h1>
    <h5 class="text-muted">
      An Website to keep track of all the COVID-19 cases around the India
    </h5>
  </div>

  <div class="container my-5">
    <div class="row text-center">
      <div class="col-3 text-warning">
        <h5>Confirmed</h5>
        <p id="confirmed">
          <?php echo $data['statewise'][0]['confirmed'] ?>
        </p>
      </div>
      <div class="col-3 text-info">
        <h5>Active</h5>
        <p id="active">
          <?php echo $data['statewise'][0]['active'] ?>
        </p>
      </div>
      <div class="col-3 text-success">
        <h5>Recovered</h5>
        <p id="recovered">
          <?php echo $data['statewise'][0]['recovered'] ?>
        </p>
      </div>
      <div class="col-3 text-danger">
        <h5>Deaths</h5>
        <p id="deaths">
          <?php echo $data['statewise'][0]['deaths'] ?>
        </p>
      </div>
    </div>
  </div>

  <div class="container p-3 my-5 text-center">
    <h5 class="text-info">"Prevention is the Cure."</h5>
    <p class="text-muted">Stay Indoors Stay Safe.</p>
  </div>

  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">States</th>
            <th scope="col">Active</th>
            <th scope="col">Confirmed</th>
            <th scope="col">Recovered</th>
            <th scope="col">Death</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 1; $i < 36; $i = $i + 1) {
            $aa = $data['statewise'][$i]['state'];
          ?>
            <tr>
              <th scope="row"><?php echo $aa ?></th>
              <td class="table-primary">
                <?php echo $data['statewise'][$i]['active']; ?>
              </td>
              <td class="table-info">
                <?php echo $data['statewise'][$i]['confirmed']; ?>
              </td>
              <td class="table-success">
                <?php echo $data['statewise'][$i]['recovered']; ?>
              </td>
              <td class="table-danger">
                <?php echo $data['statewise'][$i]['deaths']; ?>
              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<?php include 'footer.php'?>
</html>