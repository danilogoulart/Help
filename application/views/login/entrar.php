<!DOCTYPE HTML>
<html>
<head>
<title>Projeto Pescadores de Homens - Ministério Batista da Restauração</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login celula mbr, relatorio de celulas, mbr12" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url()?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?=base_url()?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?=base_url()?>/assets/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?=base_url()?>/assets/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?=base_url()?>/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?=base_url()?>/assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?=base_url()?>/assets/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Login</span> <a href="index.html">MBR12</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Esqueceu a senha ?</label>
								</span>
								<p><a href="#">Clique aqui</a> </p>
								<div class="clearfix"> </div>
							</div>
							<form action="<?=base_url()?>login/entrar" method="POST">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" name="email" class="user" value="<?=set_value("email")?>" required="required" placeholder="Insira seu e-mail" />
								</div>
								
								
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="password" class="lock" required="required" placeholder="******" />
								</div>
							
								
							</div>
							<input type="submit" name="entrar" value="Entrar">
						</form>	 
						</div>
						<br>
	
						<?php if($alerta!=null){ ?>
						<div style="text-align: center;" class="alert alert-<?=$alerta['class']?>">
							<?=$alerta['mensagem']?>
						</div>

						<?php }?>
						
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2017. Produzido por <a href="https://danilogoulart.cf/" target="_blank">Danilo Goulart.</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="<?=base_url()?>/assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>/assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>