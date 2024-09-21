<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <p>
    <input placeholder="Enter your url here" value=""/>
    <button type="button">Shorten URL</button> 
    <?php
    $server_name = "localhost";
    $user_name= "urlreader";
    $password="reader@123";
    $dbname="urlShortner";

    try
    {
        $conn= new PDO("mysql:host=$server_name;dbname=$dbname",$user_name,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO all_url(url,shortend_url) VALUES ('https://www.google.com/','https://www.example.com')";
        $conn->exec($sql);

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>". $e->getMessage();
    }
    
    ?>  
    </p>    
    </body>
</html>