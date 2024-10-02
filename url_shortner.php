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

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }
    }
    $server_name =getenv('DB_HOST');
    $user_name= getenv('DB_USER');
    $password=getenv('DB_PASS');
    $dbname=getenv('DB_NAME');
    try
    {
        function insertUrl()
        {
            $conn= new PDO("mysql:host=$server_name;dbname=$dbname",$user_name,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $conn-> prepare("INSERT INTO all_url(url,shortend_url) VALUES (:url,:shortUrl)");
            $sql->bindparam(':url',$inputUrl);
            $sql->bindparam(':shortUrl',$shortedUrl);
            $sql->execute();
        }

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>". $e->getMessage();
    }
    // function getAllUrls(){
        
        try { 

            $conn= new PDO("mysql:host=$server_name;dbname=$dbname",$user_name,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("SELECT url,shortend_url from all_url");
            $sql->execute();
    
            $allUrls=$sql->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll()))as $k=>$v){
                echo $v;
            }
        } 
        catch(PDOException $e){echo "Error:".$e->getMessage();}
       
        $conn=null;
    // }
    ?>  
    </p>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>