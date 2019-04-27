<?php
	class name
	{
		private $firstname;
		private $lastname;

		public function setname($name1, $name2)
		{
			$this->firstname = $name1;
			$this->lastname = $name2;
		}

		public function getname()
		{
			echo $this->firstname;
			echo $this->lastname;
		}
	}
?>