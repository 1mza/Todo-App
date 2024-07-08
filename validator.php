<?php
	
	class Validator
	{
		public function string($value,$min)
		{
			$value = trim($value);
			return strlen($value) >=$min ;
		}
	}