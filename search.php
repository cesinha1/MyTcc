<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "keytoshbd");
$sql = "SELECT * FROM objeto WHERE nome LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['nome']."</td>
		          <td>".$row['categoria']."</td>
		          <td>".$row['status']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>

$(document).ready(function(){
    $("#input-login").keypress(function(){
      $.ajax({
        type:'POST',
        url:'search.php',
        data:{
          name:$("#input-login").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });