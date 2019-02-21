<!DOCTYPE html>
<html>
<head>
    <title>ERF</title>
    <link type="text/css" rel="stylesheet" href="p.css">
</head>

<body id="grad">

<div class="bbox1">

<div class="box1">
   EVENT REGISTRATION FORM
</div>
<br>
<br>
<form action="action.php" name="eventregistrationForm" method="post">

<?php

echo '<label class="nn1"> Name </label>';
echo '<input class="p1" type="text" name="infirstname">';
echo '<input class="p2" type="text" name="inlastname">';

?>

<div class="n1">
	Fisrt Name
</div>

<div class="n2">
	Last Name
</div>


<?php

echo '<label class="nn2"> Company </label>';
echo '<input class="p4" type="text" name="incompany">';

?>

<br><br>

<?php

echo '<label class="nn3"> Email </label>';
echo '<input class="p5" type="text" name="inemail" placeholder="example@email.com">';

?>

<br><br>

<?php

echo '<label class="nn1"> Phone  </label>';
echo '<input class="p6" type="text" name="infirstn">';
echo '<input class="p7" type="text" name="inlastn">';

?>

<div class="n1">
	Area Code
</div>

<div class="n3">
	Phone Number
</div>

<br>

<label class="nn3"> Subject </label>
<select class="p8" name="something" >
	  <option name="something" value="">Choose option</option>
      <option name="something" value="Math">Math</option>
	  <option name="something" value="Science">Science</option>
	  <option name="something" value="AP">AP</option>
	  <option name="something" value="P.E">P.E</option>
	  <option name="something" value="English">English</option>
      <option name="something" value="Filipino<">Filipino</option>
</select>

<div class="nn4">
Are you an existing customer?
</div>

<div class="nn5">
<input type="radio" name="select" value="yes" /> yes
</div>

<div class="nn6">
<input type="radio" name="select" value="no" checked /> no
</div>


    <input class="pp1"type="submit" name="submit" value="submit" >


</form>
</div>


</body>
</html>