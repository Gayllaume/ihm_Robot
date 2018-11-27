<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Grobot Engine</title>
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><i class="fas fa-robot"></i>  Grobotte</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Menu</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Tableau de bord
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Moteurs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Rapports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Integrations
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><i class="fas fa-exclamation-circle"></i> Moteurs</h1>
          </div>
        <br>
        <h2><i class="fas fa-bolt"></i> Moteur 1</h2>
		<div class="container">
			<div class="row">
 				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-info" type="button" text="" value="-"></div>
 				<div class="col-sm-6 col-12 col-md-6" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" type="text"  name=""></div>
  				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-info" type="button" name="" value="+"></div>
  				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-danger" type="button" name="" value="STOP"></div>
			</div>
		</div>

    	</br>

		<h2><i class="fas fa-bolt"></i> Moteur 2</h2>
		<div class="container"">
			<div class="row">
 				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-info" type="button" text="" value="-"></div>
 				<div class="col-sm-6 col-12 col-md-6" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" type="text"  name=""></div>
  				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-info" type="button" name="" value="+"></div>
  				<div class="col-sm-2 col-12 col-md-2" style="margin-right: -20px;"><input style="width: 100%; margin-top: 2px; font-weight: bold;" class="btn btn-danger" type="button" name="" value="STOP"></div>
			</div>
		  </div>
        </main>
      </div>
    </div>
  </body>
</html>
