<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>PHP Test</title>
    </head>
    <body>
    <form>
  <div class="form-group">
    <label for="urlinput">Enter URI</label>
    <input type="text" class="form-control" id="urlinput"  placeholder="Enter URI">
  </div>
  <button type="submit" class="btn btn-primary">Shorten URL</button>
</form>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>