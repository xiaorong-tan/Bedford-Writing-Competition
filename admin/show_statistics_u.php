<?php
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,Email,AgeGroup,HowToKnowUs FROM Users");
$result=mysqli_query($con,"SELECT COUNT(*) as total FROM Users");
$count=mysqli_fetch_assoc($result);
while($row = mysqli_fetch_array($query)){
	echo '
         <tr>
            <td>'.$row['Title'].'</td>
            <td>'.$row['FirstName'].'</td>
            <td>'.$row['LastName'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['AgeGroup'].'</td>
            <td>'.$row['HowToKnowUs'].'</td>
         </tr>
         
	';
}
echo '   <tr>
            <th>Total number of Users</th>
            <th>'.$count[total].'</th>            
         </tr>
      
         ';
?>