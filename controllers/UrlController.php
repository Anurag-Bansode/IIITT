<?php
require_once '../models/UrlModel.php';

class UrlController {
    private $model;

    public function __construct($dbHost, $dbUser, $dbPass, $dbName) {
        $this->model = new UrlModel($dbHost, $dbUser, $dbPass, $dbName);
    }

    public function insertUrl($url, $shortUrl) {
        $this->model->insertUrl($url, $shortUrl);
    }

    public function getAllUrls() {
        return $this->model->getAllUrls();
    }
}
?>
