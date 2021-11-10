<?php 

	interface Conexion
	{
		function getDatos();
		function setDatos() : void;
	}

	class Databaseservice implements Conexion
	{
		public function getDatos()
		{
			//...
		}

		public function setDatos() : void
		{
			// ...
		}
	}

	class APIservice implements Conexion
	{
		public function getDatos()
		{
			//...
		}

		public function setDatos() : void
		{
			// ...
		}
	}

?>