<?php
    class Usuario{
        private $name;

        public function getUsuario(){
            echo"<br>Mostrar Usuario:".$this->name;;
        }

        public function setUsuario(){
            $this->name = "R&aacute;ul";
            return $this->name;
        }
        public function consultaGeneral(){
            echo "readUsuarioG";
            $sql0 = "select* from usuario ORDER BY ApellidoPaterno ASC";
            $result01 = mysql_query($sql0) or die ("Error en consulta 0");

            echo"<div class=table-responsive>";/*etiquetas te bootstrap*/
            echo"<table class=\"table table-striped\">";/*Rayado*/
            echo"<tr><td colspan=5 align=center>Lista de usuarios</td></tr>";
            echo"<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th></tr>";
            while($field = mysql_fetch_array($result01)){
                $this->Id = $field['id'];
                $this->Nombre =$field['Nombre'];
                $this->Apellido_Paterno =$field['ApellidoPaterno'];
                $this->Apellid_Materno =$field['ApellidoMaterno'];
                /*
                $this->Nombre =utf8_decode($field['Nombre']);
                $this->Apellido_Paterno =utf8_decode($field['ApellidoPaterno']);
                $this->Apellid_Materno =utf8_decode($field['ApellidoMaterno']);
                */
                $this->Nivel = $field['Nivel'];

                switch($this->Nivel){
                    case 1;
                        $type = "Administrador";
                        break;
                    case 2;
                        $type = "Maestro";
                        break;
                    case 3;
                        $type = "Alumno";
                        break;
                }
                echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->Apellido_Paterno</td><td>$this->Apellid_Materno</td><td>$type</td></tr>";

                /*
                echo"<br>Id: ".$this->Id;
                echo"<br>Nombre: ".$this->Nombre;
                echo"<br>Apellido P: ".$this->Apellido_Paterno;
                echo"<br>Apellido M: ".$this->Apellid_Materno;
                echo"<br>Nivel: ".$this->Nivel;
                */
            }
            echo"</table>";
            echo"</div>";
        }
    }