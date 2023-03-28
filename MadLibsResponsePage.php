<!DOCTYPE html>
<html>
<head>
<title>MadLib Repsonse</title>
<meta name="author" content="Karen Li" >
<style type="text/css">

</style>
</head>
<?php
$color = "green";
	$favecolor = $_REQUEST['favecolor'];
	if($favecolor == "orange") {
	$color = "blue";
	}
	if($favecolor == "black"){
		$color = "white";
	}
	if($favecolor == "blue"){
		$color = "red";
	}
	if($favecolor == "purple"){
		$color = "yellow";
	}
echo('<body style="background-color: '.$color.';">');
echo('<h1>Here is you completed MadLib...</h1>');
	$noun1 = $_REQUEST['noun1'];
	$adj1 = $_REQUEST['adj1'];
	$adverb1 = $_REQUEST['adverb1'];
	$noun2 = $_REQUEST['noun2'];
	$pluralnoun1 = $_REQUEST['pluralnoun1'];
	$adj2 = $_REQUEST['adj2'];
	$pastverb1 = $_REQUEST['pastverb1'];
	$pluralnoun2 = $_REQUEST['pluralnoun2'];
	$pluralnoun3 = $_REQUEST['pluralnoun3'];
	$verb1 = $_REQUEST['verb1'];
	$verb2 = $_REQUEST['verb2'];
	$favecolor = $_REQUEST['favecolor'];
	$adj3 = $_REQUEST['adj3'];
	$noun3 = $_REQUEST['noun3'];
	$adj4 = $_REQUEST['adj4'];
	$place1 = $_REQUEST['place1'];
	$verb3 = $_REQUEST['verb3'];
	$adj5 = $_REQUEST['adj5'];
	$honesty = $_REQUEST['honesty'];

	
	echo('<span style = "color:'.$favecolor.';">');
	echo('<p>Today’s Kinkaid values students for their <b>'.$noun1.'</b> as well as their achievement and emphasizes <b>'.$adj1.'</b></p>');
	echo('<p> growth – intellectual, physical, social, and <b>'.$adverb1.'.</b></p>');
	echo('<p> Kinkaid recognizes that the primary <b>'.$noun2.'</b> for instilling and strengthening <b>'.$pluralnoun1.'</b> resides with parents.</p>');
   echo('<p> Nevertheless, a school can and should play an important role in <b>'.$adj2.'</b> education.</p>');
	echo('<p>We have <b>'.$pastverb1.'</b> for core <b> '.$pluralnoun2.' </b>at the heart of our emphasis on character development.</p>');
	echo('</span>');
	
	echo('<h2>Honesty</h2>');
	echo('<p><b>'.$pluralnoun3.'</b> of the Kinkaid community tell the truth and <b>'.$verb1.' </b>with integrity and honor. We do not mislead, cheat, or <b>'.$verb2.'.</b></p>');

	
	echo('<h2><b>Responsibility</b></h2>');
	echo('<p>Members of the Kinkaid community are <b>'.$adj3.'</b> and hold themselves and others accountable for their actions. We do not make excuses, blame others, or take unwarranted credit.</p>'.$adj4.'<p> regard for all persons, for property, for<b> '.$place1.'</b><p>');
	
	echo('<h2><b>Respect</b></h2>');
	echo('<p>Members of the Kinkaid <b>'.$noun3.'</b> affirm the intrinsic dignity of all people. We act with tolerance, courtesy, and <b>'.$adj4.'</b> regard for all persons, for property, for <b>'.$place1.'</b>, and for ourselves.</p>');
	
	echo('<h2><b>Kindness</b></h2>');
	echo('<p>Members of the Kinkaid community exhibit caring and compassionate behavior in all aspects of daily life. We are not mean, and we do not <b>'.$verb3.'</b> nor act in a <b>'.$adj5.'</b> manner.</p>');
		
		
		
		if($honesty == TRUE) {
		echo('<p>Thank you for filling out this form</p>');
			}
	
	elseif($honesty == FALSE) {
		echo('<p>Be honest!</p>');
	}


echo('<br />');

echo('<a href="MadLibsInputPage.html">Return</a>');
echo('</body>');
?>
</html> 