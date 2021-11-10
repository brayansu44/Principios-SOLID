<?php 
	
	
	abstract class Coche
	{
		abstract function precioMedioCoChe();
	}

	class Renault extends Coche
	{
		public function precioMedioCoChe()
		{
			return 18000;
		}
	}

	class Audi extends Coche
	{
		public function precioMedioCoChe()
		{
			return 25000;
		}
	}

	class Mercedes extends Coche
	{
		public function precioMedioCoChe()
		{
			return 27000;
		}
	}

	$arrayCoches = [
		new Renault(),
		new Audi(),
		new Mercedes()
	];		
	
	class imprimirPrecioMedioCoche
	{	
		public function precioMedioCoChe(array $arrayCoches)
		{
			foreach ($arrayCoches as $coche) 
			{
				$coche->precioMedioCoChe();
			}
		}		
	}
	
?>