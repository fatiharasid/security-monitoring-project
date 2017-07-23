<?php
include 'opendb.php';
$searchid=$_POST['searchvalue'];
?>
<style type="text/css">
#select {
	text-align: center;
}
.N {
	text-align: center;
}
.N {
	text-align: center;
}
</style>

<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="48%" border="0" align="center" bgcolor="#202020">
    <tr>
      <td width="43%" class="N"><label>
        <input name="searchvalue" type="text" id="searchvalue" value="looking for" size="30" onClick="value=''">
      </label></td>
      <td width="37%"><label>
        <select name="select" id="select">
          <option value="user" selected>User</option>
          <option value="date">Date</option>
          <option value="time_attempt">Time_attempt</option>
          <option value="time_left">Time_left</option>
          <option value="purpose">Purpose</option>
         <option value="report">Report</option>
        </select>
      </label></td>
      <td width="20%" class="N"><label>
        <input type="submit" name="find" id="find" value="Search">
      </label></td>
    </tr>
  </table>
</form>
<form name="form2" method="post" action="">
  <table width="72%" height="611" border="0" align="center">
    <tr>
      <td height="605" align="left" valign="top" bgcolor="#FFFFFF"><?php 
 
 switch ($_POST['select']) {
    case "user":
          if(isset($_POST['find']))
		{
			$queryone="SELECT * FROM history WHERE user LIKE '%$searchid%'";
			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
			echo "<ol>";
        	while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
				{
				extract($row);
				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br></li>";
				}
			echo "</ol>";
		}
			break;
    case "date":
        if(isset($_POST['find']))
		{
 			$queryone="SELECT * FROM history WHERE date LIKE '%$searchid%'";
  			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
  			echo "<ol>";
 			while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
  				{
   				 extract($row);
   				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br></li>";
  				}
			echo "</ol>";
		}
        break;
	case "time_attempt":
        if(isset($_POST['find']))
		{
 			$queryone="SELECT * FROM history WHERE time_attempt LIKE '%$searchid%'";
  			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
  			echo "<ol>";
 			while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
  				{
   				 extract($row);
   				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br></li>";
  				}
			echo "</ol>";
		}
        break;
case "time_left":
        if(isset($_POST['find']))
		{
 			$queryone="SELECT * FROM history WHERE time_left LIKE '%$searchid%'";
  			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
  			echo "<ol>";
 			while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
  				{
   				 extract($row);
   				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br><br></li>";
  				}
			echo "</ol>";
		}
        break;
		case "purpose":
        if(isset($_POST['find']))
		{
 			$queryone="SELECT * FROM history WHERE purpose LIKE '%$searchid%'";
  			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
  			echo "<ol>";
 			while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
  				{
   				 extract($row);
   				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br> <br></li>";
  				}
			echo "</ol>";
		}
        break;
		case "report":
        if(isset($_POST['find']))
		{
 			$queryone="SELECT * FROM history WHERE report LIKE '%$searchid%'";
  			$resultqueryone=mysql_query($queryone) or die("Error retrieving details");
  			echo "<ol>";
 			while($row=mysql_fetch_array($resultqueryone,MYSQL_ASSOC))
  				{
   				 extract($row);
   				 echo "<li>User: <b>$user</b><br>
				Purpose: <b>$purpose</b></br>
				Date: <b>$date</b></br>
                Time attempt: <b>$time_attempt</b><br>
                Time left: <b>$time_left</b><br>
                Report: <b>$report</b><br></li>";
  				}
			echo "</ol>";
		}
        break;
    default:
        break;
}
 ?></td>
    </tr>
  </table>
</form>
