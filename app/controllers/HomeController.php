<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\Contacto;

require_once("./core/Controller.php");
class HomeController extends Controller{
    public function index(...$params){
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $Contactos = Contacto::all();
        
        $this->view('contact_list', ($Contactos));
    }
    public function new(){
        echo "Hola desde New de HomeController";
    }
}
?>