{"changed":true,"filter":false,"title":"Subtraction.php","tooltip":"/Subtraction.php","value":"<html>\n\t<head>\n\t\t\t<title> Math Flashcards!</title>\n\t</head>\n\t<body>\n\t\t<center>\n\t\t\t<a href=\"Addition.php\">Addition</a> | <a href=\"Subtraction.php\">Subtraction</a> | <a href=\"Multiplication.php\">Multiplication</a> | <a href=\"Division.php\">Division</a>\n\t\t\t<br/><br/>\n<h1>Subtraction</h1>\n\n\t<h1>\n<?php  \n\n$x = rand(1,100);\n$y = rand(1,100);\n\necho $x . \" - \" . $y;\n\n?> \n\n</h1>\n\t<br/><br/>\n<?php\n\n$t = 0;\n\nif (!$_POST[\"answer\"]) {} \n\nelse {\n   $correct_answer = $_POST\t[\"x\"] - $_POST[\"y\"];\n   \n   if ($correct_answer == $_POST[\"answer\"])\n   \n   {\n   \n   echo $_POST[\"x\"] . \" - \" . $_POST[\"y\"] . \" = \" . $_POST[\"answer\"];\n   }\n   else {\n       \n       while ($t < 3)    \n       \n   \t\techo \"Incorrect. Please try again\";\n   }\n\n}\n\n?>\n\n\t<br/><br/><br/><br/>\n\t<form method =\"post\" action=\"/Subtraction.php\">\n\t\t\t\t<input name = \"x\" type = \"hidden\" value = \"<?php echo $x ?>\">\n\t\t\t\t<input name = \"x\" type = \"hidden\" value = \"<?php echo $y ?>\">\n\t\tAnswer: <input name \"answer\"> <button>Submit</button> <button>New Card</button>\n\t</form>\n\t\t</center>\n\t</body>\n</html>","undoManager":{"mark":8,"position":11,"stack":[[{"start":{"row":0,"column":0},"end":{"row":33,"column":7},"action":"remove","lines":["<html>","\t<head>","\t\t\t<title> Math Flashcards!</title>","\t</head>","\t<body>","\t\t<center>","\t\t\t<a href=\"\">Addition</a> | <a href=\"\">Subtraction</a> | <a href=\"\">Multiplication</a> | <a href=\"\">Division</a>","\t\t\t<br/><br/>","<h1>Addition</h1>","","\t<h1>","<?php  ","","$x = rand(1,100);","$y = rand(1,100);","","echo $x . \" + \" . $y;","","?> ","","</h1>","\t<br/><br/>","<?php","","echo $_POST[\"answer\"]","?>","","\t<br/><br/><br/><br/>","\t<form method =\"post\" action=\"/\">","\t\tAnswer: <input> <button>Submit</button> <button>New Card</button>","\t</form>","\t\t</center>","\t</body>","</html>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":56,"column":7},"action":"insert","lines":["<html>","\t<head>","\t\t\t<title> Math Flashcards!</title>","\t</head>","\t<body>","\t\t<center>","\t\t\t<a href=\"\">Addition</a> | <a href=\"\">Subtraction</a> | <a href=\"\">Multiplication</a> | <a href=\"\">Division</a>","\t\t\t<br/><br/>","<h1>Addition</h1>","","\t<h1>","<?php  ","","$x = rand(1,100);","$y = rand(1,100);","","echo $x . \" + \" . $y;","","?> ","","</h1>","\t<br/><br/>","<?php","","$t = 0;","","if (!$_POST[\"answer\"]) {} ","","else {","   $correct_answer = $_POST\t[\"x\"] + $_POST[\"y\"];","   ","   if ($correct_answer == $_POST[\"answer\"])","   ","   {","   ","   echo $_POST[\"x\"] . \" + \" . $_POST[\"y\"] . \" = \" . $_POST[\"answer\"];","   }","   else {","       ","       while ($t < 3)    ","       ","   \t\techo \"Incorrect. Please try again\";","   }","","}","","?>","","\t<br/><br/><br/><br/>","\t<form method =\"post\" action=\"/\">","\t\t\t\t<input name = \"x\" type = \"hidden\" value = \"<?php echo $x ?>\">","\t\t\t\t<input name = \"x\" type = \"hidden\" value = \"<?php echo $y ?>\">","\t\tAnswer: <input name \"answer\"> <button>Submit</button> <button>New Card</button>","\t</form>","\t\t</center>","\t</body>","</html>"]}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":113},"action":"remove","lines":["<a href=\"\">Addition</a> | <a href=\"\">Subtraction</a> | <a href=\"\">Multiplication</a> | <a href=\"\">Division</a>"],"id":3},{"start":{"row":6,"column":3},"end":{"row":6,"column":154},"action":"insert","lines":["<a href=\"Addition\">Addition</a> | <a href=\"Subtraction\">Subtraction</a> | <a href=\"Multiplication\">Multiplication</a> | <a href=\"Division\">Division</a>"]}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"remove","lines":["+"],"id":4}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":["-"],"id":5}],[{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"remove","lines":["+"],"id":6}],[{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"insert","lines":["-"],"id":7}],[{"start":{"row":6,"column":3},"end":{"row":6,"column":154},"action":"remove","lines":["<a href=\"Addition\">Addition</a> | <a href=\"Subtraction\">Subtraction</a> | <a href=\"Multiplication\">Multiplication</a> | <a href=\"Division\">Division</a>"],"id":8},{"start":{"row":6,"column":3},"end":{"row":6,"column":170},"action":"insert","lines":["<a href=\"Addition.php\">Addition</a> | <a href=\"Subtraction.php\">Subtraction</a> | <a href=\"Multiplication.php\">Multiplication</a> | <a href=\"Division.php\">Division</a>"]}],[{"start":{"row":49,"column":31},"end":{"row":49,"column":32},"action":"insert","lines":["S"],"id":9},{"start":{"row":49,"column":32},"end":{"row":49,"column":33},"action":"insert","lines":["u"]},{"start":{"row":49,"column":33},"end":{"row":49,"column":34},"action":"insert","lines":["b"]},{"start":{"row":49,"column":34},"end":{"row":49,"column":35},"action":"insert","lines":["t"]},{"start":{"row":49,"column":35},"end":{"row":49,"column":36},"action":"insert","lines":["r"]},{"start":{"row":49,"column":36},"end":{"row":49,"column":37},"action":"insert","lines":["a"]},{"start":{"row":49,"column":37},"end":{"row":49,"column":38},"action":"insert","lines":["c"]},{"start":{"row":49,"column":38},"end":{"row":49,"column":39},"action":"insert","lines":["t"]},{"start":{"row":49,"column":39},"end":{"row":49,"column":40},"action":"insert","lines":["i"]},{"start":{"row":49,"column":40},"end":{"row":49,"column":41},"action":"insert","lines":["o"]},{"start":{"row":49,"column":41},"end":{"row":49,"column":42},"action":"insert","lines":["n"]},{"start":{"row":49,"column":42},"end":{"row":49,"column":43},"action":"insert","lines":["."]}],[{"start":{"row":49,"column":43},"end":{"row":49,"column":44},"action":"insert","lines":["p"],"id":10},{"start":{"row":49,"column":44},"end":{"row":49,"column":45},"action":"insert","lines":["h"]},{"start":{"row":49,"column":45},"end":{"row":49,"column":46},"action":"insert","lines":["p"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":12},"action":"remove","lines":["Addition"],"id":11},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["S"]},{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":["u"]},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["b"]},{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":["t"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["r"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["a"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["c"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["t"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["i"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["o"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"remove","lines":["+"],"id":12}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":["-"],"id":13}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":13},"end":{"row":16,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php"}},"timestamp":1556694558363}