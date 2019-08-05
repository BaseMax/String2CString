<?php
// $function="\twrite(output, ";
$function="\tprintf(\"%s\", ";
$input=file_get_contents("input.txt");
$lines=explode("\n", $input);
foreach($lines as $line) {
	$line=str_replace("	", "\\t", $line);
	$line=str_replace("\"", "\\\"", $line);
	print $function."\"".$line."\\n\");\n";
}
