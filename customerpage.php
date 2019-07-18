<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Customer Services</title>

  <!-- Bootstrap core CSS -->
  <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <b><div class="sidebar-heading">Customer Dashboard</div></b>
           <div class="list-group list-group-flush">
        
         <a  class="list-group-item list-group-item-action bg-light" id="stock">Stock</a>
               <a href="customer.php" class="list-group-item list-group-item-action bg-light">Make Order</a>
         <a  class="list-group-item list-group-item-action bg-light" id="my_order">MyOrder</a>
       
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Logout</a>
            </li>             
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid"  id="mainArea">
        <h1 class="mt-4" style="background-image: url('img/16.jpg');">Welcome Customer</h1>      
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
        $("#stock").click(function(e){
          e.preventDefault();
             $("#mainArea").load("stocktable.php");
        });
    });
  </script>
</script>
  <script>
    $(document).ready(function(){
        $("#my_order").click(function(e){
          e.preventDefault();
             $("#mainArea").load("customerstocklist.php");
        });
    });
  </script>

</body>

</html>
