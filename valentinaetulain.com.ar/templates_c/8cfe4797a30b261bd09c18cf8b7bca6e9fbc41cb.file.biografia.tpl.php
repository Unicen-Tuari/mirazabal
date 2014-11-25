<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 22:59:31
         compiled from ".\templates\biografia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114855473aa43cfde92-51242275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfe4797a30b261bd09c18cf8b7bca6e9fbc41cb' => 
    array (
      0 => '.\\templates\\biografia.tpl',
      1 => 1414074985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114855473aa43cfde92-51242275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473aa43d7aae2_26707095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473aa43d7aae2_26707095')) {function content_5473aa43d7aae2_26707095($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section class="container">
	
<section>
	<div class="row-fluid">
		<div class="contentbio">
			<div class="span9">
				<img src = "imagenes\foto_bio.jpg" class="img-responsive" alt = "Biografia" />			
			</div>
		
			<div class="textobio">
				<p class="bio"> Nacio en Berisso, Buenos Aires, en el a&ntildeo 1997. Al cumplir 14 an&ntildeos
				de edad comenzo a tomar sus primeras fotos en unas vacaciones, alli tendria     
				sus primeros contactos con la fotografia. Una vieja Nikon la acompa&ntildeo     
				los primeros a&ntildeos, cuando por curiosidad y casi sin percatarlo poco       
				a poco se convirtio en un autodidacta de la materia. A fuerza de ensayo         
				y error fue dominando los secretos de la fotografia. La fotografia la despertaba
				a las cinco de la ma&ntildeana y la hacia esperar por horas para dispara un     
				fotograma. Hoy en dia reside en Buenos Aires donde toma fotografias en eventos, 
				cumplea&ntildeos, casamientos, etc </p> <br>
			</div>
		</div>
	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
