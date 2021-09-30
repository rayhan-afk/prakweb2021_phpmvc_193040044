<?php

class Mahasiswa_model
{
  private $dbh; //database handler
  private $stmt;

  public function __construct()

  {
    // data source main
    $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040044';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOEXception $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
