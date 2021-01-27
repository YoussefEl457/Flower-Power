<?php

class database {
    private $host;
    private $dbh;
    private $user;
    private $pass;
    private $db;


    function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'flowerpower';

        try{
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->dbh = new PDO($dsn, $this->user, $this->pass); 
        }catch(PDOException $e){
            die("Unable to connect: " . $e->getMessage());
        }
    }

    function insertKlantUser($username, $password){
        $sql = "INSERT INTO klant VALUES (:klantcode, :vn, :tv, :sur, :adres,:postcode,:woonplaats, :geboortedatum, :gebruikersnaam, :wachtwoord)";

        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([
            'klantcode'=>NULL,
            'gebruikersnaam'=>$username,
            'wachtwoord'=>password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    function insertMedewerkerUser($username, $password){
        $sql = "INSERT INTO medewerker(medewerkerscode, gebruikersnaam, wachtwoord) VALUES (:medewerkerscode, :gebruikersnaam, :wachtwoord)";

        $stmt = $this->dbh->prepare($sql);
        $stmt->execute([
            'medewerkerscode'=>NULL,
            'gebruikersnaam'=>$username,
            'wachtwoord'=>password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    function loginexample($username, $pwd){
        $sql="SELECT medewerkerscode, gebruikersnaam FROM medewerker WHERE gebruikersnam = :uname";

        $stmt = $this->dbh->prepare($sql); // prepared statements prevent sql injections
        $stmt->execute(['uname'=>$username]); //voert prepared statement uit

        $result = $stmt->fetch(PDO::FETCH_ASSOC); //$result['id] of $result['gebruikersnaam']
        print_r($result);

    }
}

?>