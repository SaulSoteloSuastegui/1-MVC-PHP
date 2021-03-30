<?php
//como en el model estamos inicializando el objeto ya podremos usar sus metodos 
class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    public function insert(){

        //nuevo/registrarAlumno

        //instanciado desde el modelo nuevo llamado en su metodo insertar
        echo "----insertar datos rn la base de datos";
        //como llamaria a la base de datos, como en el modelo estamos inicializando el objeto model
        // quien en su constructor instancia el clase database en creando el objeto  db. La clase datavase  tiene el metodo de la conexcion connec
       // por lo cual en este metodo podemo hacer:: $this->db->connect
       // si una de nuestras vistas necesita insertar datos, el objeto app descompondra la url la cual
       // se usara para llegar al controlador base quie llamara al modelo y vista requeridos

    }
}