<?php

namespace App\Models;

use CodeIgniter\Model;

class MarvelModel extends Model
{
    protected $table = 'personajes_marvel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'imagen'];
// Funciones CRUD para obtener la data

// Obtener todos los personajes
    public function getPersonajesMarvel($limit, $offset)
    {
        return $this->findAll($limit, $offset);
    }
// Agregar personajes a la base de datos 
    public function agregarPersonaje($data)
    {
        return $this->insert($data);
    }
// Obtener personaje por ID
    public function getpersonajeporId($id)
    {
        return $this->find($id);
    }
// Actualizar personaje por id y la data que se aquiera actualizar
    public function actualizarPersonaje($id, $data)
    {
        return $this->update($id, $data);
    }
//eliminar personaje 
    public function eliminarPersonaje($id)
    {
        return $this->delete($id);
    }
}
