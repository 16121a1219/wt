<html>
<body bgcolor="cyan" align="center">
<form action="selectenter.php" method="POST">
SELECT SEM:<select name="s">
<option> II-BTECH I SEM RESULT</option>
<option> II-BTECH II SEM RESULT</option>
</select>
<button name="b" value="view" >select</button>
</body>
</html>
<?php
session_start();
if(isset($_POST['b']))
{
	$s=$_POST['s'];
	if($s=='II-BTECH I SEM RESULT')
	   header('Location:entermarks.php');
else if($s=='II-BTECH II SEM RESULT')
	   header('Location:entermarks1.php');	      
}
?>