<?php

  include 'calc.inc.php';

	if ( $_SERVER['REQUEST_METHOD']=='POST' && isset( $_POST['calculate'] ) )
	{
	  ob_clean();
	  
	  $firstNoInserted = htmlspecialchars($_POST['first_number']);
	  $secondNoInserted = htmlspecialchars($_POST['second_number']);
	  $insertedOperator = $_POST['calculate'];

	  $calculator = new Calculator($firstNoInserted, $secondNoInserted, $insertedOperator);
	  echo $calculator->calcMethod();
	  
	}
 ?>