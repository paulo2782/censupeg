<?php

namespace App\Classes;


Class Monthclass {

	public function month($month){
    	$arrayMonth = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

    	switch ($month) {
    		case '1':
    			return $arrayMonth[0];
    			break;
    		case '2':
    			return $arrayMonth[1];
    			break;
    		case '3':
    			return $arrayMonth[2];
    			break;
    		case '4':
    			return $arrayMonth[3];
    			break;
    		case '5':
    			return $arrayMonth[4];
    			break;
    		case '6':
    			return $arrayMonth[5];
    			break;
    		case '7':
    			return $arrayMonth[6];
    			break;
    		case '8':
    			return $arrayMonth[7];
    			break;
    		case '9':
    			return $arrayMonth[8];
    			break;
    		case '10':
    			return $arrayMonth[9];
    			break;
    		case '11':
    			return $arrayMonth[10];
    			break;
    		case '12':
    			return $arrayMonth[11];
    			break;
    	}
    }
}
