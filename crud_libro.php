<?php
require_once('conexion.php');

        class CrudLibro{

        public function _construct(){}

        public function insertar($libro){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO libros values(NULL,:nombre)');
            $insert->bindValue('nombre',$libro->getNombre());
            $insert->execute();
        }

        public function mostar(){
            $db=Db::conectar();
            $listaLibros=[];
            $select=$db->query('SELECT * FROM libros');

            foreach($select->fetchALL() as $libro){
                $myLibro= new Libro();
                $myLibro->setId($libro['id']);
                $myLibro->setNombre($libro['nombre']);
                $listaLibros[]=$myLibro;
            }
            return $listaLibros;
        }

        public function eliminar($id){
            $db=Db::conectar();
            $eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }

        public function obtenerLibro($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $libro=$select->fetch();
            $myLibro= new Libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            return $myLibro;
        }

        public function actualizar($libro){
            $db=Db::conectar();
            $select=$db->prepare('UPDATE libros SET nombre=:nombre WHERE ID=:id');
            $select->bindValue('id',$libro->getId());
            $select->bindValue('nombre',$libro->getNombre());
            $select->execute();
        }   
    }
?>