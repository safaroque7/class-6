<?php
	class university
	{
		public $du;
		public function unname($un1, $un2)
		{
			$this->du=$un2;
			echo 'my favourite universities name are ' . $un1.$this->du;
		}
	}
?>