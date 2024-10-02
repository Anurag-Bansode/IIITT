<?php

class UrlModel {
    private $conn;

    public function __construct($dbHost, $dbUser, $dbPass, $dbName) {
        $this->conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insertUrl($url, $shortUrl) {
        $sql = $this->conn->prepare("INSERT INTO all_url (url, shortend_url) VALUES (:url, :shortUrl)");
        $sql->bindParam(':url', $url);
        $sql->bindParam(':shortUrl', $shortUrl);
        $sql->execute();
    }

    public function getAllUrls() {
        $sql = $this->conn->prepare("SELECT url, shortend_url FROM all_url");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function __destruct() {
        $this->conn = null;
    }
}
?>
