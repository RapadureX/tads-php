<?php


namespace Ifnc\Tads\Gateway;

use PDO;

class ProdutoGateway
{
    private static $conn;

    public static function setConnection(PDO $conn){
        self::$conn = $conn;
    }

    public function all(){
        $sql = "SELECT * FROM produto";
        $result = self::$conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM produto WHERE id = $id";
        $result = self::$conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM produto WHERE id = $id";
        return self::$conn->query($sql);
    }

}