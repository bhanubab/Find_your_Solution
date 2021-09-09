<!DOCTYPE HTML> 
<head>
  <link href="css/my_style.css" type="text/css" rel="stylesheet"></head>  

<body>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class=""> 
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"><font color="white"><i class="icon-home"></i> Home</a></font>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="photos.php"><font color="white"><i class="icon-picture"></i> Photos</font></a></li>
        <li><a href="friends.php"><font color="white"><i class="icon-group"></i> Friends</font></a></li>
                      
		<li><a href="message.php"><font color="white"><i class="icon-envelope"></i> Message</font></a>
              </li>
        <li>
          <a href="logout.php"><font color="white"><i class="icon-signout"></i> Logout</font></a>
        </li>
      </ul>

	<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control"  id="span5" placeholder="Search">
            </form>
		</div>
   
    </nav>
   
  </div>
  
</header>
<div id="mySidenav" class="sidenav">

<a><img src="logo.png" width="130px" hight="20px" floatval="left"></a>
  <a href="Home.php"><i class="icon-home "></i> Home</a>
  <a href="Profile.php"><i class="icon-user "></i> Profile</a>
  <li class="submenu"><i class="icon icon-th-list"></i> <span>Group</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="group/profile.php">Personal</a></li>
        <li><a href="form-validation.html">Professioanl</a></li>
        <li><a href="form-wizard.html">Socaial</a></li>
      </ul>
    </li>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span> 

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}
</script>
</body>