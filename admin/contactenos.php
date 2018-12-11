<!doctype html>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
	
	<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							 <div class="muted pull-left"><i class="icon-inbox"></i> Contáctenos</div>                               
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form>
										<div class="block-content collapse in">
											<h3>
												</i><i class="icon-comment-alt"></i>&nbsp;Comuniquese con Nosotros</h3>
										<hr>
										<div class="span3">
										<center>
										<img id="developers" src="images/office-building.png" class="img-circle">
										<hr>
										<p>Sucursal: Casa Matriz</p>
										<p>Direción: Santa Ana, El Salvador</p>
										<p>Email: gorchor@gmail.com</p>
										<p>Teléfono: (503)-2415-6244</p>
										<p>Fax: (503)-2415-6244</p>	
										</center>
										</div>
										
										
										<div class="span3">
										<center>
										<img id="developers" src="images/office-building.png" class="img-circle">
										<hr>
										<p>Sucursal: Sucursal Numero 1</p>
										<p>Direción: Santa Ana, El Salvador</p>
										<p>Email: gorchor@gmail.com</p>
										<p>Teléfono: (503)-2415-6244</p>
										<p>Fax: (503)-2415-6244</p>	
										</center>
								</div>
										</hr>
										</div>	
									</form>
					
								</div>
							</div>
						 </div>
<?php include('footer.php'); ?>
</div>
		<?php include('script.php'); ?>
    </body>
</html>