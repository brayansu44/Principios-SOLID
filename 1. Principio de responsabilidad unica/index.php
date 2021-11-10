<?php 
	class Coche
	{
		$marca = "";

		public function Coche($marca)
		{
			$this->marca = $marca
		}

		public function getMarcaCoche()
		{
			return $this->marca;
		}
	}

	class CocheBd
	{
		public function guardarCocheDB($coche)
		{

		}

		public function eliminarCocheDB($coche)
		{

		}
	}

?>