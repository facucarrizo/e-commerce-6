<?php
include("classConexion.php");
    class Marca
    {
        private $idMarca;
        private $marcaNombre;

        public function listarMarcas()
        {
            $conexion = Conexion::conectar();
            $sql = "SELECT idMarca, marcaNombre
                        FROM marcas";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();

            $marcas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $marcas;
        }

        public function verMarcaPorID($id)
        {
          $conexion =Conexion::conectar();
          $sql  = "SELECT marcaNombre
                   FROM marca
                   WHERE ID = $ID";
          $stmt = $conexion->prepare($sql);
          $stmt->execute();
          $marcaID = $stmt->fetchall(PDO::FETCH_ASSOC);
          return $marcaID;
        }

        public function agregarMarca()
        {
            $marcaNombre = $_POST['marcaNombre'];
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO marcas
                            VALUES ( NULL, :marcaNombre )";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':marcaNombre', $marcaNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setMarcaNombre($marcaNombre);
                $this->setIdMarca($conexion->lastInsertId());
                return true;
            }
            return false;

        }

        public function modificarMarca()
        {
        $marcaModificar= $_POST['marcaModificar'];
        $conexion =Conexion::conectar();
        $sql  = "UPDATE marca SET nombre
        WHERE nombre = :nombre";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $marcaNombre, PDO::PARAM_STR);
        }

        public function eliminarMarca()
        {
         $marcaID= $_POST['marcaID'];
         $conexion =Conexion::conectar();
         $sql = "DELETE FROM marca WHERE id =:id";
         $stmt = $conexion->prepare($sql);
         $stmt->bindParam(':nombre', $marcaID, PDO::PARAM_STR);
        }

        /**
         * Get the value of idMarca
         */
        public function getIdMarca()
        {
                return $this->idMarca;
        }

        /**
         * Set the value of idMarca
         *
         * @return  self
         */
        public function setIdMarca($idMarca)
        {
                $this->idMarca = $idMarca;

                return $this;
        }

        /**
         * Get the value of marcaNombre
         */
        public function getMarcaNombre()
        {
                return $this->marcaNombre;
        }

        /**
         * Set the value of marcaNombre
         *
         * @return  self
         */
        public function setMarcaNombre($marcaNombre)
        {
                $this->marcaNombre = $marcaNombre;

                return $this;
        }
        }
