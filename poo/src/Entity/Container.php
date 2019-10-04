<?php


namespace Ifnc\Tads\Entity;


class Container
{

    public static function getConexao(){
        return new \PDO("sqlite:data.db.db");

    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Container
     */
    public function setId(int $id): Container
    {
        $this->id = $id;
        return $this;
    }
    private $id;

    public function __construct(int $id=0)
    {
        $this->id = $id;
    }


    public function findAll()
    {
        $query = "select * from container";
        $conexao = Container::getConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function create($id){
        $query = "insert into container(id) values('$id')";
        $conexao = Container::getConexao();
        $conexao->exec($query);
    }
}