<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Cars</title>
</head>
<body>
<?php

$models = array ("128i", "135i", "328i", "335i", "528i", "535i", "740i", "750i");

$colors = array ("Crimson Red", "Jet Black", "Alpine White");

print "<p>The amount of BMW models to choose from are " . count($models) .".</p>";

print "<p>Let's add the M series to our models. 1M, M3, M5, M6 (the SUVs don't count).</p>";

$models[] = '1M';
$models[] = 'M3';
$models[] = 'M5';
$models[] = 'M6';

print "<p>After adding those models there are now " . count($models) . " in the models array.";

$bmws = array (
'models' => $models,
'colors' => $colors
);

print "<pre>"; print_r ($bmws); print "</pre>";

?>
</body>
</html>