<?php
	header('Content-Type: text/html; charset=utf-8');
	$locales = array('en_US','fr_FR', 'de_DE', 'hi', 'fa','ar_EG', 'pt_BR');

	$number = 1234567890;

	foreach($locales as $locale){
		$formatter = new NumberFormatter($locale, NumberFormatter::DECIMAL);
		echo $locale.":\t".$formatter->format($number)."</br>";
	}

?>