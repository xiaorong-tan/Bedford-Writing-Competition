<?php
$con = mysqli_connect('localhost','bedfo893_BWC','PA9VB57#','bedfo893_BWC');
$query=mysqli_query($con,"SELECT Title,FirstName,LastName,Email FROM Admin");
$result=mysqli_query($con,"SELECT COUNT(*) as total FROM Admin");
$count=mysqli_fetch_assoc($result);
while($row = mysqli_fetch_array($query)){
	echo '
         <tr>
            <td>'.$row['Title'].'</td>
            <td>'.$row['FirstName'].'</td>
            <td>'.$row['LastName'].'</td>
            <td>'.$row['Email'].'</td>            
         </tr>
         
	';
}
echo '   <tr>
            <th>Total number of Administrators</th>
            <th>'.$count[total].'</th>            
         </tr>
      
         ';
?>