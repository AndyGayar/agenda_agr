<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;
class Contacto extends Model{
    protected $table = 'contactos';
    protected $primaryKey = 'id';
    public $timestamps = false; 
}
?>