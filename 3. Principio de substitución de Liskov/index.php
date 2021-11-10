<?php 
	
	abstract class Coche
	{
		abstract function precioMedioCoChe();
		abstract function numAsientos();
	}

	class Renault implements Coche
	{
		public function precioMedioCoChe()
		{
			return 18000;
		}

		public function numAsientos()
		{
			return 5;
		}
	}

	class Audi implements Coche
	{
		public function precioMedioCoChe()
		{
			return 25000;
		}

		public function numAsientos()
		{
			return 5;
		}
	}

	class Mercedes implements Coche
	{
		public function precioMedioCoChe()
		{
			return 27000;
		}

		public function numAsientos()
		{
			return 5;
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

	class imprimirNumAsientos
	{	
		public function numAsientos(array $arrayCoches)
		{
			foreach ($arrayCoches as $coche) 
			{
				$coche->numAsientos();
			}
		}		
	}


	/* Otro ejemplo */

	interface IRun
	{
   		 function run(): void;
	}

	interface IHunt
	{
    	function hunt(): void;
	}

	interface IWalk
	{
   		 function walk(): void;
	}


	class Turtle implements IWalk
	{
    	public function walk(): void
    	{

    	}
	}

	class Tiger implements IHunt, IWalk, IRun
	{
   		public function hunt(): void
    	{

    	}

    	public function run(): void
    	{

    	}

    	public function walk(): void
    	{

    	}
	}


?>