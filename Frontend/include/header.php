  <div class="jumbotron">
    <div class="container text-center">
      <h1>Online Store</h1>
      <a href="index.php"><img src="images/shop.png"></a>     
      <p>Coming soon...</p>
    </div>
  </div>
<!--  Navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="index.php" class="navbar-brand">.SHOP</a>
        </div>

        <!-- Menu Items-->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <!-- Right align -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#popUpWindow"><span class="glyphicon glyphicon-user"></span>   Register</button>
                    <div class="modal fade" id="popUpWindow">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!--    header-->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Register</h2>
                          </div>
                          <!--    body  (form)-->
                          <div class="modal-body">
                            <form role="form">
                              <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address:">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password:">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type Password:">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nickname (optional):">
                              </div>
                            </form>
                          </div>
                          <!--    button  (submit)-->
                          <div class="modal-footer">
                            <button class="btn btn-success btn-block">Register</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
               
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
  </nav>
  <!-- search bar -->
  <div class="well text-center">
    <form class="form-inline" action="#" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for anything..." name="item" size="65">
      </div>
      <div class="form-group" >
         <select class="form-control" name="Ads">
          <option value="">All Ads</option>
          <option value="">buy and sell</option>
          <option value="">pets</option>
          <option value="">cars & vehicles</option>
          <option value="">jobs</option>
          <option value="">services</option>
         </select>
      </div>  
      <div class="input-group">
        <!-- select dropdown menu -->
          <select class="selectpicker form-control">
            <optgroup>
              <option value="">Select location...</option>
            </optgroup>
            <optgroup label="Alberta">
              <option value="">Banff/Canmore</option>
              <option value="">Edmonton Area</option>
              <option value="">Fort McMurray</option>
            </optgroup>
            <optgroup label="British Columbia">
              <option value="">Cariboo Area</option>
              <option value="">Comox Valley Area</option>
              <option value="">Cowicha Valley</option>
            </optgroup>
            <optgroup label="Ontario">
              <option value="">Muskoka</option>
              <option value="">North Bay</option>
              <option value="">Toronto</option>
            </optgroup>
            <optgroup label="Quebec">
              <option value="">Abitibi-Temiscamingue</option>
              <option value="">Granby</option>
              <option value="">Quebec City</option>
              <option value="">Sherbrooke</option>
              <option value="">Montreal</option>
            </optgroup>
          </select>
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    
  </div>