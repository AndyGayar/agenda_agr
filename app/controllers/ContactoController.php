<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Contacto;
use Formacom\config\config;

use function Symfony\Component\Clock\now;

class ContactoController extends Controller{
    public function index(...$params){
        $Contactos = Contacto::all();
        /*header("Content-Type: application/json");
        echo json_encode($contactoses, JSON_PRETTY_PRINT);*/
        $this->view('contact_list', ($Contactos));
    }
    public function new(...$params){
        if(isset($_POST["nombre"])){
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
                $this->view("new_contact");
                return;
            }
            $contactos = new Contacto();
            $contactos->nombre = $_POST["nombre"];
            $contactos->telefono = $_POST["telefono"];
            $contactos->email = $email;
            $contactos->direccion = $_POST["direccion"];
            $contactos->fecha_creacion = now();
            $contactos->save();

            header('Location: BASE_URL."/contactos"');
        }else{
            $this->view("new_contact"); 
        }
    }
   
    public function edit(...$params)
    {
        if (isset($_POST["id"])) {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
                $contactos = Contacto::find($params[0]);
                $this->view('\edit_contact', $contactos);
                return;
            }
            $contactos = Contacto::find($params[0]);
            $contactos->nombre = $_POST["nombre"];
            $contactos->telefono = $_POST["telefono"];
            $contactos->email = $email;
            $contactos->direccion = $_POST['direccion'];
            $contactos->save();
            header(header: 'Location: '.BASE_URL.'contactos/');
        } else {
            $contactos = Contacto::find($params[0]);
            $this->view('\edit_contact', $contactos);
        }
    }
    public function json(){
        $contactos = Contacto::get();
        $datos=[
            "mensaje"=>"Listado contactos",
            "listado"=>$contactos
        ];
        header("Content-Type: application/json");
       $json= json_encode($datos, JSON_PRETTY_PRINT);
       echo $json;
       exit();
    }

    public function delete(...$params){
        $contactos = Contacto::find($params[0]);
        $contactos->delete();
        header('Location: '.BASE_URL.'contactos/');
    }
}
?>