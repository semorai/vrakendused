</html>

<head>


<link rel="stylesheet" type="text/css" href="kujundus.css">

<title> esimene koduleht </title>
</head>

<body>
<h1> Tere maailm </h1>
<p> testimine </p>
<img src ="pilt.jpg"></img>

<?php echo 'Current PHP version: ' . phpversion();
echo phpversion('tidy');
?>

<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "kaksveergu";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    
    mysqli_close($l);
?>


</body>


</html>
