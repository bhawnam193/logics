/* explode like functionality but after 3rd occurrance of special symbol. */
<?php
	
	$str = "John Anthony Aniston is a Greek-American actor. He is best known for his role as Victor Kiriakis on the NBC daytime drama Days of Our Lives, which he originated in July 1985 and has played continually since then. He is the father of actress Jennifer Aniston.";
	$b = explode(" ", $str);
	while (!empty($b))
	{
	  $foo = array();
	  $foo[] = array_shift($b);
	  $foo[] = array_shift($b);
	  $foo[] = array_shift($b);
	  $bar[] = implode(" ", $foo);
	}
	print_r($bar);

/*second method */


	$parts = preg_split('!([^ ]* [^ ]* [^ ]*) !',$str, -1,
            PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

	var_dump($parts);
	
	$parts1 = preg_split('!([^ ]* [^ ]*) !',$str, -1,
            PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

	var_dump($parts1);
?>
