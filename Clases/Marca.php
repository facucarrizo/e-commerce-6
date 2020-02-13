<?php

    class Categoria
    {
        private $idMarca;
        private $marcaNombre;

        public function listarMarcas()
        {
            $link = classConexion::conectar();
            $sql = "SELECT idMarca, marcaNombre 
                        FROM marcas";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $marcas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $marcas;
        }

        public function verMarcaPorID($id)
        {
          $link =classConexion::conectar();
          $sql  = "SELECT marcaNombre
                   FROM marca 
                   WHERE ID = $ID";
          $stmt = $link->prepare($sql);
          $stmt->execute();
          $marcaID = $stmt->fetchall(PDO::FETCH_ASSOC);
          return $marcaID;
        }

        public function agregarMarca()
        {
            $marcaNombre = $_POST['marcaNombre'];
            $link = classConexion::conectar();
            $sql = "INSERT INTO categorias
                            VALUES ( NULL, :marcaNombre )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':marcaNombre', $marcaNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setMarcaNombre($marcaNombre);
                $this->setIdMarca($link->lastInsertId());
                return true;
            }
            return false;

        }

        public function modificarMarca()
        { 
        $marcaModificar= $_POST['marcaModificar'];
        $link =classConexion::conectar();
        $sql  = "UPDATE marca SET nombre
        WHERE nombre = :nombre";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $marcaNombre, PDO::PARAM_STR);
        }

        public function eliminarMarca()
        {
         $marcaID= $_POST['marcaID'];
         $link =classConexion::conectar();
         $sql = "DELETE FROM marca WHERE id =:id";
         $stmt = $link->prepare($sql);
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


      