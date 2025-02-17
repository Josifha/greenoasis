<?php
  require_once "connection.php";
  


                    
                    if(isset($_POST["submit"]))
                    {
                    
					 $sql="INSERT INTO `appointment`( `name`, `email`, `mobile`, `services`,`event_dt`,`message`) VALUES ('{$_POST["name"]}', '{$_POST["email"]}','{$_POST["mobile"]}', '{$_POST["services"]}','{$_POST["event_dt"]}','{$_POST["message"]}');";
						if($conn->query($sql))
				{
                    echo "alert('message Send')";
                    header("location: index.html");
				}
                else{
                    
                }
					}
				?>