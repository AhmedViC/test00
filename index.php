<?php 

$test = isset($_POST['OTP']) ? $_POST['OTP'] : '';
if($_SERVER['REQUEST_METHOD']==='POST'){
if ($test === "1337") {
    echo "<h1 style='color: green;'><center>Congrats, you solved the lab!</center></h1>";
} else {
    echo "<h1 style='color: red;'><center>Invalid OTP</center></h1>";
}
}
?>
<html>
    <head>
        <title>OTP Form</title>
    </head>
    <body>
    	<center>
        	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="secret">Enter OTP Code:</label>
            <input type="number" name="OTP" id="OTP" maxlength="4">
            <input type="submit" value="Submit">
            <h3>Hint the OTP Consist of 4 Digits</h3>
        	</form>
        </center>
    </body>
</html>