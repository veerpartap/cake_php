<?php

	echo  "Please see the users list below :"

?>

=====================================================================
=====================================================================
<h1> Heading 1</h1>
<h2> Heading 2</h2>
<h3> Heading 3</h3>
<h4> Heading 4</h4>
<h6> Heading 6</h6>
=====================================================================


<?php
	if(is_array($data) && count($data) > 0) 
	{
		foreach($data as $row=>$key)
			{
				echo "<li>Name :" .$row['User']['name'] . "</li>"; 
			}
	} else 
		{
			echo "<li>Record not found </li>";
		}		
		
?>
