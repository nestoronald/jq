<?php 
$entradas = array('emacipacion' =>array('parte'=>'n.',
										'definicion'=>'lorem sdfdsfd sdfdsfsd'									
								) ,
					'enano' =>array('parte'=>'n.',
										'definicion'=>'dicese de la persona de baja estatura')
					);
if (isset($entradas[$_REQUEST['termino']])) {
	$entrada = $entradas[$_REQUEST['termino']];
	$html = "<div>";
	$html .= $_REQUEST['termino'];
	$html .= "</div>";
	$html .= "<div>";
	$html .= $entrada['definicion'];
	$html .= "</div>";


}
print($html);
 ?>
