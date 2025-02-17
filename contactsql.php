<?php
  require_once "connection.php";
  
				
                    if(isset($_POST["submit"]))
                    {
                    
					 $sql="INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('{$_POST["name"]}', '{$_POST["email"]}', '{$_POST["subject"]}', '{$_POST["message"]}');";
						if($conn->query($sql))
				{
                    echo "alert('message Send')";
                    header("location: index.html");
				}
                else{
                    
                }
					}
				?>