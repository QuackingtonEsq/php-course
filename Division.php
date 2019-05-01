<html>
	<head>
			<title> Math Flashcards!</title>
	</head>
	<body>
		<center>
			<a href="Addition.php">Addition</a> | <a href="Subtraction.php">Subtraction</a> | <a href="Multiplication.php">Multiplication</a> | <a href="Division.php">Division</a>
			<br/><br/>
<h1>Division</h1>

	<h1>
<?php  

$x = rand(1,100);
$y = rand(1,100);

echo $x . " / " . $y;

?> 

</h1>
	<br/><br/>
<?php

$t = 0;

if (!$_POST["answer"]) {} 

else {
   $correct_answer = $_POST	["x"] / $_POST["y"];
   
   if ($correct_answer == $_POST["answer"])
   
   {
   
   echo $_POST["x"] . " / " . $_POST["y"] . " = " . $_POST["answer"];
   }
   else {
       
       while ($t < 3)    
       
   		echo "Incorrect. Please try again";
   }

}

?>

	<br/><br/><br/><br/>
	<form method ="post" action="/Division.php">
				<input name = "x" type = "hidden" value = "<?php echo $x ?>">
				<input name = "x" type = "hidden" value = "<?php echo $y ?>">
		Answer: <input name "answer"> <button>Submit</button> <button>New Card</button>
	</form>
		</center>
	</body>
</html>