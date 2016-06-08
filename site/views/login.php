<ul class="nav navbar-nav navbar-right pull-right">
  <li class="dropdown" id="menuLogin">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin"><span class="glyphicon glyphicon-user"></span> LOGIN</a>
    <div class="dropdown-menu" style="padding:17px;">
      <form class="form" id="formLogin" method="post"> 
        <label>Username</label><input class="form-control" name="username" id="username" placeholder="Username" type="text"> 
        <label>Password</label><input class="form-control" name="password" id="password" placeholder="Password" type="password"><br>
        
        <div class="btn-group">
          <a class="btn btn-success" id="btnLogin">LOGIN</a>
          <a class="btn btn-danger" id="btnRegister">REGISTER</a>
        </div>
      </form>
    </div>
  </li>

  <div id="result_login"></div>
  
</ul>