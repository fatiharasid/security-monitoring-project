<?php
include 'opendb.php';

$user=$_POST['uservalue'];
$date=$_POST['datevalue'];
$time_attempt=$_POST['attemptvalue'];
$time_left=$_POST['leftvalue'];
$purpose=$_POST['purposevalue'];
$report=$_POST['reportvalue'];


?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <div align="left">
    <p>LAB USAGE FORM </p>
    <p>&nbsp;</p>
  </div>
</form>
<form action="" id="labuse" method="post" enctype="multipart/form-data">
  <table width="65%" border="0">
    <tr>
      <td>Lab use purpose</td>
      <td>
      
        <p>
          <label>
            <input type="radio" name="purposevalue" value="teaching" id="purposevalue" />
            Teaching</label>
         
          <label>
            <input type="radio" name="purposevalue" value="learning" id="purposevalue" />
            Learning</label>
      
          <label>
            <input type="radio" name="purposevalue" value="project" id="purposevalue" />
            Project</label>
         
          <label>
            <input type="radio" name="purposevalue" value="maintainance" id="purposevalue" />
            Maintainance</label>
          
          <label>
            <input type="radio" name="purposevalue" value="program" id="purposevalue" />
            program</label>
          
        </p>
      </td>
    </tr>
    <tr>
      <td width="27%">User </td>
      <td width="65%"><label>
        <input name="uservalue" type="text" placeholder="" id="uservalue" value="<?php echo $user; ?>" size="60"/>
      </label></td>
    </tr>
    <tr>
      <td width"26%">Date </td>
      <td width="65%"><label><input name="datevalue" type="text" placeholder="yyyy-mm-dd " id="datevalue" value="<?php echo $date; ?>" size="60"/></label></td>
    </tr>
    <tr>
      <td width"26%">Time attend </td>
      <td width="65%"><label><input name="attemptvalue" type="datetime" placeholder="hh-mm" id="attemptvalue" value="<?php echo $time_attempt;?>" size="60"/></label></td>
    </tr>  
    <tr>
      <td width"26%">Time left </td>
      <td width="73%"><label><input name="leftvalue" type="datetime" placeholder="hh-mm" id="leftvalue" value="<?php echo $time_left;?>" size="60"/></label></td>
    </tr>
    <tr>
      <td width"26%">Report/comment </td>
      <td width="65%"><label><input name="reportvalue" type="text" placeholder="" id="reportvalue" value="<?php echo $report;?>" size="60"/></label></td>
    </tr>  
  </table>
  <p>
    <input type="reset" name="gonow2" id="" value="Reset" onclick="resett()"/>
    <input type="submit" name="gonow" id="gonow" value="Submit" onclick="success()"/>
  </p>
</form>

<?php //team info
if(isset($_POST['gonow']))
{
$querytitle="INSERT INTO history (user,date,time_attempt,time_left,purpose,report) VALUES ('$user','$date','$time_attempt','$time_left','$purpose','$report')";
		$resultquerytitle=mysql_query($querytitle) ;
		echo "<script> success();</script>";
}
?>
<script>
function success() {
    alert("Your Report is successful Added");
}

function resett() {
	 document.getElementById("labuse").reset();
	}
</script>

