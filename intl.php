<?php
	header('Content-Type: text/html; charset=utf-8');
	$locales = array('en_US','fr_FR', 'de_DE', 'hi', 'fa','ar_EG', 'pt_BR');

	$number = 1234567890;

	foreach($locales as $locale){
		$formatter = new NumberFormatter($locale, NumberFormatter::DECIMAL);
		echo $locale.":\t".$formatter->format($number)."</br>";
	}
	echo'</br>';

	$german_names = array('Weiß','Goldmann','Göbel','Weiss','Göthe','Goethe','Götz');

	$coll =new Collator('de_DE');
	$coll->sort($german_names);
	print_r($german_names);
	echo'</br>';

	$coll = new Collator('de@collation=phonebook');
	$coll->sort($german_names);
	print_r($german_names);

	echo'</br>';
	echo'</br>';

	$now = new DateTime(null,new DateTimeZone('America/Sao_Paulo')); //data atual no brasil

	$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::FULL,'America/Sao_Paulo', IntlDateFormatter::GREGORIAN);
	echo 'Agora é: "'. $formatter->format($now). '" no '. "Brasil\n";

	echo'</br>';

	$formatter = new IntlDateFormatter('en_GB', IntlDateFormatter::FULL, IntlDateFormatter::FULL,'Europe/London', IntlDateFormatter::GREGORIAN);
	echo 'Agora é: "'. $formatter->format($now). '" em '. "Londres\n";

	echo'</br>';

	$formatter = new IntlDateFormatter('ja_JP',IntlDateFormatter::FULL,IntlDateFormatter::FULL,'Asia/Tokyo', IntlDateFormatter::GREGORIAN);
	echo 'Agora é: "'. $formatter->format($now).'" em '."Tokyo\n"; //normal datetime no japao

	echo'</br>';

	$formatter = new IntlDateFormatter('ja_JP@calendar=japanese',IntlDateFormatter::FULL,IntlDateFormatter::FULL,'Asia/Tokyo',IntlDateFormatter::TRADITIONAL);
	echo 'Agora é: "'.$formatter->format($now). '" em '."Tokyo\n"; //periodo Heisei

	echo'</br>';
	echo'</br>';

	$number = 1234567890;

	$formatter = new NumberFormatter('pt_BR', NumberFormatter::SPELLOUT);
	echo "Brasil({$formatter->getLocale()}):\t".$formatter->format($number)."\n"; //pronuncia do valor
	echo'</br>';
	$formatter = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
	echo "Brasil({$formatter->getLocale()}):\t".$formatter->format($number)."\n"; //valor em numero
	echo'</br>';
	$formatter = new NumberFormatter('ko_KR', NumberFormatter::SPELLOUT);
	echo "Korean spellout({$formatter->getLocale()}):\t".$formatter->format($number)."\n"; //pronuncia do valor
	echo'</br>';
	$formatter = new NumberFormatter('ko_KR', NumberFormatter::CURRENCY);
	echo "Korean currency ({$formatter->getLocale()}):\t".$formatter->format($number)."\n"; //valor em numero


?>