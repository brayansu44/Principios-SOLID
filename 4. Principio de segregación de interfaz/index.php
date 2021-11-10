<?php 

	interface IAve
	{
		function comer() : void;
	}

	interface IAveVoladora
	{
		function volar() : void;
	} 

	interface IAveNadadora
	{
		function nadar() : void;
	}

	class Loro implements IAve, IAveVoladora
	{
		public function volar() : void
		{
			//...
		}

		public function comer() : void
		{
			//...
		}
	}

	class Pinguino implements IAve, IAveNadadora
	{
		public function nadar() : void
		{
			//...
		}

		public function comer() : void
		{
			//...
		}
	}

?>