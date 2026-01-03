<?php
    // TODO Se define la clase "Conectar"
    class Conectar{
        protected $dbh;

        protected function Conexion() {
            try {
                $conectar = $this->dbh=new PDO("mysql:local=localhost;dbname=pasarela","root","123456");
                return $conectar;
            } catch (Exception $e) {
                //throw $th;
                print "¡ Error BD !" . $e->getMessage()."<br/>";
                die();
            }
        }

        //TODO: Funcion para configurar la codificacion de caracteres.
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
?>