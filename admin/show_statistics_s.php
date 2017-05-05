<?php
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,If_a_student,AgeGroup,Reference_num FROM Participants_story");
$result=mysqli_query($con,"SELECT COUNT(*) as total FROM Participants_story");
$count=mysqli_fetch_assoc($result);
while($row = mysqli_fetch_array($query)){
	echo '
         <tr>
            <td>'.$row['Title'].'</td>
            <td>'.$row['FirstName'].'</td>
            <td>'.$row['LastName'].'</td>
            <td>'.$row['If_a_student'].'</td>
            <td>'.$row['AgeGroup'].'</td>
            <td>'.$row['Reference_num'].'</td>
         </tr>
         
	';
}
echo '   <tr>
            <th>Total number of participants</th>
            <th>'.$count[total].'</th>            
         </tr>
      
         ';
?>