<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>learning php as hypertext preprocessor</title>
</head>
<body>
    <?php
    echo "<h1> hello world </h1> <br>";
    echo "<hr>";
    echo "<h1> hello world </h1> <br>";
    echo  "<h2> ma aakesh thapa hu...</h2> <br>"
    ?>
    <form  action="site.php" method="post">
			<u id="u_all">Satnogs</u>
		<input type="text" placeholder="name" name="u_name" size="10" />
		<input type="password" name="u_password" placeholder="password" size="10" minlength="5" />
		<input type="submit"  value="login" />
		</form>
        <?php
        echo $_POST['u_name'];
        echo "<br>";
        echo $_POST['u_password'];
        echo "<br>";

    $u_name=$_POST['u_name'];
	$u_password=$_POST['u_password'];
	if($u_name=="aakesh" && $u_password=="rajesh")
        {echo "logged in";}
	else
        {echo "sorry";
        }
?>
        
     
    
</body>
</html>