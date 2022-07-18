<?php
class Conexion {
    private $host;
    private $user;
    private $pass;
    private $db;
    private $conexion;

    public function __construct(){
        try{
            $env = parse_ini_file("env.ini", true);
            $this->host = $env['HOST'];
            $this->user = $env['USERNAME'];
            $this->pass = $env['PASSWORD'];
            $this->db = $env['DATABASE'];
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8",$this->user,$this->pass);
            
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            return "Falla de Conexión".$e;
        }
    }

    #creo un metodo de ejecucion a sql de insert, update, delete   
    public function ejecutar($sql){
        #Execute una consulta de sql
        $this->conexion->exec($sql);
        #esto nos da el valor de id insertado
        return $this->conexion->lastInsertId();
    }
    public function consultar($sql){ # select 
        #ejecuta la consulta y nos devuelve la info de la base
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        #retorna todos los registros de la consulta sql
        return $sentencia->fetchAll();
        
    }

    public function editarRecurso($id, $nombre, $descripcion, $imagen, $archivo){
        $sql = "UPDATE recursos SET nombre = '$nombre', descripcion = '$descripcion',imagen = '$imagen', archivo = '$archivo' WHERE id = $id";
        $this->ejecutar($sql);
    }
}

?>