<?php

    class Categoria
    {
        private $idCategoria;
        private $catNombre;

        public function listarCategorias()
        {
            $link = classConexion::conectar();
            $sql = "SELECT idCategoria, catNombre 
                        FROM categorias";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categorias;
        }

        public function verCategoriaPorID()
        {

        }

        public function agregarCategoria()
        {
            $catNombre = $_POST['catNombre'];
            $link = classConexion::conectar();
            $sql = "INSERT INTO categorias
                            VALUES ( NULL, :catNombre )";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':catNombre', $catNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setCatNombre($catNombre);
                $this->setIdCategoria($link->lastInsertId());
                return true;
            }
            return false;

        }

        public function modificarCategoria()
        {

        }

        public function eliminarCategorias()
        {

        }


        /**
         * @return mixed
         */
        public function getIdCategoria()
        {
            return $this->idCategoria;
        }

        /**
         * @param mixed $idCategoria
         */
        public function setIdCategoria($idCategoria)
        {
            $this->idCategoria = $idCategoria;
        }

        /**
         * @return mixed
         */
        public function getCatNombre()
        {
            return $this->catNombre;
        }

        /**
         * @param mixed $catNombre
         */
        public function setCatNombre($catNombre)
        {
            $this->catNombre = $catNombre;
        }

    }