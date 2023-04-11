<?php
class Database{

    public $connection;

    public function __construct($config, $usename = 'root', $password = '')
    {
        

        $dsn = 'mysql:' . http_build_query($config, "", ";");

        // connection a la base de donnée
        //$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        //prépare et execute une requète sql
        $this->connection = new PDO($dsn, $usename, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {
        //prépare une requète a l'execution et retourne un objet
        $statement = $this->connection->prepare($query);

        //éxecute la requete préparer
        $statement->execute();

        //recupère la ligne suivante d'un jeux de resultat PDO
        return $statement;
    }
}