<?php

/**
* Componente de Prueba
*/

class JMComponent extends CApplicationComponent
{
	public $statusVar;

	public function init()
	{
		/*echo "Probando!";*/
	}

	public function status()
	{
		return ($this->statusVar===null)?"Inactivo!":"Activo!";
	}
}