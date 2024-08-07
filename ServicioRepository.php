<?php
require_once 'Servicio.php';

class ServicioRepository
{
    private string $dsn;
    private string $username;
    private string $password;
    private PDO $pdo;

    public function __construct()
    {
        $config = require __DIR__. '../../data/config.php';
        $this->dsn = $config['database']['dsn'];
        $this->username = $config['database']['username'];
        $this->password = $config['database']['password'];
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
    }

    public function getAllServicios()
    {
        $stmt = $this->pdo->query('SELECT * FROM servicios');
        $servicios = [];
        while ($row = $stmt->fetch()) {
            $servicios[] = new Servicio((int) $row['id_service'], $row['name']);
        }
        return $servicios;
    }
}