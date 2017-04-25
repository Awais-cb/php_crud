<?php
		include("connection.php");
        
        if(isset($_POST["update"])){
            $e_id1=$_GET["edit_r"];
            $name=$_POST["stname"];
            $scl=$_POST["scname"];
            $roll=$_POST["rollno"];
            $rslt=$_POST["result"];
        
            $query1="update students set st_name='$name', sc_name='$scl',roll_no='$roll',result='$rslt' where id='$e_id1'";
            if(mysql_query($query1)){
                
				 echo "<script>window.open('student.php?updated=Record Updated. . .','_self') </script>";				//redirecting user
            }
            
            
        }
        



?>