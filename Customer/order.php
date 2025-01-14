<!DOCTYPE html>
<html>
<head>
  <title>BakeryOrderingSystem</title>
   <meta charset="UTF-8">
            <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="../Bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-fixed" style="text-decoration: none; margin: 20px;">
  <a class="navbar-brand" href="">SUGARHIGH DELIGHTS</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navb">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../index.php">CONTACT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="products.php">PRODUCTS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="order.php">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">CART</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="checkout.php">CHECKOUT</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Customer</a>
          <a class="dropdown-item" href="../Admin/login.php">Admin</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">SIGNUP</a>
    </li> 
    </ul>
  </div>
</nav>
<br>
<div class="container">
  <div class="row">
   <div class="col-md-6">
     <div class="container">
    <img src="../images/cakey.jpg" class ="img-fluid0" style="width: 450px; height: 500px; align-content: center; margin-left: 10px;">
     </div>
    </div>
     <div class="col-md-6">
      <h4> Vanilla Cake</h4>
      <h5>Ksh 1500</h5>
      <!--<div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>-->
     <div class="star-rating">
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum lectus vel accumsan facilisis. Integer sed eros sed nunc luctus aliquet. Nunc commodo diam ac erat pharetra, id ultrices tellus porttitor.</p>
      <form action="cart.php">
         <label for="action">Color:</label><br>
         <div class="form-group">
          <div class="input-group">
              <input type="text" id="colortext" onkeyup="check();" name="colortext" class="form-control" placeholder="" required="required">
          </div>
               <label for="action">Frosting:</label><br>
      <div class="form-group">
        <div class="input-group">
          
          <select class="form-control" id="role" name="role">
            <option>Buttercream</option>
            <option>Creamcheese</option>
            <option>Whipping Cream</option>
          </select>
        </div>
      </div>
       <label for="action">Filling:</label><br>
      <div class="form-group">
        <div class="input-group">
          
          <select class="form-control" id="role" name="role">
            <option>Raspberry</option>
            <option>Strawberry</option>
          </select>
        </div>
      </div>
       <label for="action">Decorations:</label><br>
      <div class="form-group">
        <div class="input-group">
          
          <select class="form-control" id="role" name="role">
            <option>Ganache</option>
            <option>Sprinkles</option>
            <option>Chocolate chips</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="input-group">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
                </button>
                </span>
                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
                </button>
                </span>
            </div>
        </div>
        <br>
        <div class="col-md-8">
          <button type="submit" id="orderbtn" name="orderbtn" class="btn btn-danger btn-block">ADD TO CART</button>
        </div>
        
      </div>
      
      </form>
</div>
    </div>
  </div>
</body>
</html>
