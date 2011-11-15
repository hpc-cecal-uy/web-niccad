<!DOCTYPE html>

<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>NICCAD</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" />
		<?php echo $css_include; ?>
				
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<?php echo $js_include; ?>
	</head>
	<body>
		<div id="page">
			<div id="page-header">
				<div id="page-header-body">
					<a href="<?php echo base_url();?>index.php">
						<img src="<?php echo base_url();?>img/logo-niccad.png" height="140px" style="margin-bottom:10px;"></img></a>
					<p style="position:relative; float:right; width:670px;">
						El Núcleo Interdisciplinario de Computación Científica de Alto Desempeño (NICCAD) está integrado por investigadores interesados en las temáticas de métodos matemáticos y computacionales aplicados a la resolución de problemas científicos y de computación de alto desempeño. 
					</p>
				</div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php echo base_url();?>index.php#integracion">Integración</a></li>
					<li><a href="<?php echo base_url();?>index.php#cometidos">Cometidos</a></li>
					<li><a href="<?php echo base_url();?>index.php#estructura">Estructura</a></li>
					<li><a href="<?php echo base_url();?>index.php#grupos">Grupos</a></li>
					<li><a href="<?php echo base_url();?>index.php?proyectos">Proyectos</a></li>
				</ul>
			</div>
			
			<div id="page-body">
				<?php $this->load->view($body); ?>
			</div>
			
			<div id="page-footer">
				<div id="page-footer-body">
					<p>Esta p&aacute;gina fue generada en {elapsed_time} segundos.</p>
				</div>
			</div>
		</div>
	</body>
</html>
