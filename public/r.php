<?php
require_once '../vendor/autoload.php'; // Load dependencies
require_once '../controllers/UrlController.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$dbHost = $_ENV['DB_HOST']??getenv('DB_HOST');
$dbUser = $_ENV['DB_USER']??getenv('DB_USER');
$dbPass = $_ENV['DB_PASS']??getenv('DB_PASS');
$dbName = $_ENV['DB_NAME']??getenv('DB_NAME');

// Create controller instance
$controller = new UrlController($dbHost, $dbUser, $dbPass, $dbName);

// Handle form submission
$action = $_GET['c'] ?? null;

if($action)
{
    $originalurl=$controller->getRedirectionUrl($action);
    $url=$originalurl[0]['url'];

    if($url)
    {
  
        header("Location: $url");
        echo"<pre>BASE:$url</pre>";
        exit();

    }
    else
    {
        echo "Shortened URL not found";
    }
}
else 
{
    echo "No shortened URL provided.";
}



