<?php

namespace App\Controllers;

use App\Models\MarvelModel;
use CodeIgniter\Controller;

class MarvelController extends Controller
{
    private $apiController;
    private $marvelModel;
// esta funcion es como hacer un import de dependencias sobre las cuales estaremos trabajando
    public function __construct()
    {
        // Inicializa el controlador y el modelo 
        $this->apiController = new ApiController();
        $this->marvelModel = new MarvelModel();
    }

    // Obtener y mostrar personajes de la api
    public function index()
    {   // aqui appunta a la funcion para obtener los personajes del controlador 
        $personajesAPI = $this->apiController->getPersonajesMarvel();
        // pasa los datos a la vista
        $datos['marvelPersonajes'] = $personajesAPI['datos']['respuesta'];
        // Obtener personajes desde la base de datos
        $datos['personajesDB'] = $this->marvelModel->findAll();
        // retorna los datos a la vista
        return view('', $datos);
    }

    // Funcion para agregar personaje a la base de datos 
    public function agregarPersonaje($id)
    {
        // Verificar si el personaje ya existe en la base de datos *validacion*
        $personajeExistente = $this->marvelModel->find($id);

        if (!$personajeExistente) {
            // Obtener el personaje desde la api por id o name 
            $personaje = $this->apiController->getPersonajePorId($id);

            if (!empty($personaje)) {
                // Guardar el personaje en la base de datos
                $this->marvelModel->insert($personaje);
                return redirect()->to('/')->with('success', 'Personaje agregado');
            } else {
                return redirect()->to('/')->with('error', 'No se pudo agregar');
            }
        } else {
            return redirect()->to('/')->with('warning', 'El personaje ya existe ');
        }
    }

    // Funcion para eliminar personaje de la base de datos
    public function eliminarPersonaje($id)
    {
        // Verificar si el personaje existe en la base de datos *validacion*
        $personaje = $this->marvelModel->find($id);

        if ($personaje) {
            // Eliminar el personaje de la base de datos
            $this->marvelModel->delete($id);
            return redirect()->to('/')->with('success', 'Personaje eliminado');
        } else {
            return redirect()->to('/')->with('error', 'No se encontro el personaje');
        }
    }

    // Funcion para editar personajee en la base de datos
    public function actualizarPersonaje($id)
    {
        // Verificar si el personaje existe en la base de datos *validacion *
        $personaje = $this->marvelModel->find($id);

        if ($personaje) {
            // validacion , no me dejaba editar
            return view('EditarPersonaje', ['personaje' => $personaje]);
        } else {
            return redirect()->to('/')->with('error', 'No se encontro el personaje ');
        }
    }
}
