<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Dashboard </div>
      <div class="list-group list-group-flush">
        <a href = "" class="list-group-item list-group-item-action bg-light" id="update_stock">Update stock</a>
        <a href="" class="list-group-item list-group-item-action bg-light" id="review_applications">Review Applications</a>
        <a href="" class="list-group-item list-group-item-action bg-light" id="customer_orders">Customer Orders</a>
        
        <a href="" class="list-group-item list-group-item-action bg-light" id="summary">Summary</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    
  </form>
    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Show/hide sidebar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="adminindex.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Logout</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account options
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">View profile</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" id="mainArea">
        <h1 class="mt-4">data area</h1>      
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="css/vendor/jquery/jquery.min.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    
    <script>
    $(document).ready(function(){
        $("#summary").click(function(e){
          e.preventDefault();
             $("#mainArea").load("adminsummary.php");
        });
    });
  </script>
   <script>
    $(document).ready(function(){
        $("#customer_orders").click(function(e){
          e.preventDefault();
             $("#mainArea").load("customerstocklist.php");
        });
    });
  </script>
   <script>
    $(document).ready(function(){
        $("#review_applications").click(function(e){
          e.preventDefault();
             $("#mainArea").load("farmerapplications.php");
        });
    });
  </script>
  <script>
    $(document).ready(function(){
        $("#update_stock").click(function(e){
          e.preventDefault();
             $("#mainArea").load("updateStock.php");
        });
    });
  </script>
   

</body>

</html>
