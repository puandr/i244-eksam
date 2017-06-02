<?php

class MyMission {

	private $missions = array(

		/* põhieksam 12.06.2016 */
		"Loo lihtne kommentaaride lisamise vorm. Andmed salvesta andmebaasi. Kuva salvestaud kommentaare.",
		"Loo lihtne kommentaaride lisamise vorm. Andmed salvesta tekstifaili. Kuva salvestatud kommentaare.",
		"Loo lihtne veebilehe külastajate loendur. Andmed salvesta andmebaasi. Kuva lehel külastuste arvu.",
		"Loo lihtne veebilehe külastajate loendur. Andmed salvesta tekstifaili. Kuva lehel külastuste arvu ja viimase külastuse aega.",
		"Loo veebilehe külastajate IP-aadressite log. Andmed salvesta andmebaasi. Kuva erinevate IP-aadressite arvu.",
		"Loo veebilehe külastajate IP-aadressite log. Andmed salvesta tekstifaili. Kuva külastuste arvu.",
		"Loo faili ülesse laadimise vorm. Luba laadida ülesse vaid pildifaile. Kuva kõikide ülesse laetud failide arv.",
		"Loo faili ülesse laadimise vorm. Luba laadida ülesse vaid tekstifaile. Kuva kõikide ülesse laetud failide arv.",
		"Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta andmebaasi.",
		"Loo lehekülje hindamise võimalus (skaalal 1-5 näiteks). Kuva välja leheküljele antud keskmist hinnet. Andmed salvesta tekstifaili.",
		"Loo leheküljele \"like\" nupp. Kuva välja \"like\"-ide arvu. Andmed salvesta andmebaasi.",
		"Loo leheküljele \"like\" nupp. Kuva välja \"like\"-ide arvu. Andmed salvesta tekstifaili.",
		"Loo veebilehekülg, mis kuvab kasutajale, mitmendat korda kasutaja lehekülge külastab.",
		"Loo veebilehekülg, mis kuvab kasutajale, kuna kasutaja viimati seda veebilehte külastas.",
		"Loo veebilehekülg, mis kuvab, kas kasutaja kell on õige (ehk serveri kellaga sama). Kuva lehel ka mõlemad kellaajad.",

		/* Järeleksam 17.06.2016 */
		"Loo lihtne lehekülg märkmete tegemiseks. Igal kasutajal on oma isiklikud märkmed.",
		"Loo lihtne lehekülg märkmete tegemiseks. Kõik kasutajad näevad ja muudavad samu märkmeid.",
		"Loo lihtne hääletuse süsteem. Kasutaja saab hääletada kas \"jah\"/\"ei\". Kuva välja \"jah\"-ide ja \"ei\"-de arv.",
		"Loo lihtne kalkulaator, mis arvutab täisnurkse kolmnurga kahe kaateti järgi välja hüpotenuusi pikkuse.",
		"Loo lihtne lehekülg, mis kuvab välja kõik selle lehe külastuste ajad."

		/* Järeleksam 22.08.2016 */
		// Kõik eelnevad ülesanded

	);
	private $my;

	const COOKIE_NAME = "mymission3";

	public function __construct() {
		if (!isset($_COOKIE[self::COOKIE_NAME])) {
			$this->my = $this->missions[array_rand($this->missions)];
			setcookie(self::COOKIE_NAME, $this->my, time()+3600*24);
		} else {
			$this->my = $_COOKIE[self::COOKIE_NAME];
		}
	}

	function getMyMission() {
		return $this->my;
	}

}
