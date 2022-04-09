<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #6a5acd;
}
</style>

<nav class="navbar navbar-dark bg-primary fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<img width="40" src="assets/project1.png">
  		</div>
	  	<div class="col-md-2 mt-2 float-right">
	  		<a class="text-light" href="ajax.php?action=logout"><?php echo $_SESSION['name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>