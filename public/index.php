<?php
require_once '../vendor/autoload.php'; // Load dependencies
require_once '../controllers/UrlController.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// Get DB credentials
$temp=

$dbHost = $_ENV['DB_HOST']??getenv('DB_HOST');
$dbUser = $_ENV['DB_USER']??getenv('DB_USER');
$dbPass = $_ENV['DB_PASS']??getenv('DB_PASS');
$dbName = $_ENV['DB_NAME']??getenv('DB_NAME');
// Create controller instance
$controller = new UrlController($dbHost, $dbUser, $dbPass, $dbName);

// Handle form submission
$action = $_GET['action'] ?? null;

if ($action === 'submit' && !empty($_POST['urlinput'])) {
    $url = $_POST['urlinput'];
    $shortUrl = substr(md5(microtime()), rand(0, 26), 5);// Simple shortening logic
    $controller->insertUrl($url, $shortUrl);

}

// Fetch all URLs and render the views
$urls = $controller->getAllUrls();

// Include views
include '../views/url_form.php';
include '../views/url_list.php';
?>
