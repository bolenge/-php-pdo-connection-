<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

/**
 * @return PDO
 * @throws Exception
 */
function dbConnection(): PDO
{
    $config = config();
    $db = $config['db'];

    $dsn = 'mysql:host=' . $db['host'] .';port=' . $db['port'] . ';dbname=' . $db['database'];

    try {

        $pdo = new PDO($dsn, $db['user'], $db['password']);

        // Generate exception when catch error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        throw new Exception("Erreur de connexion à la base de données : " . $e->getMessage(), 500) ;
    }
}
