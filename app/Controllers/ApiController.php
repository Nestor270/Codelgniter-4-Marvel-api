<?php
// En este controlador trate de hacer una instancia para realizar la solicitud a la api de marvel 
namespace App\Controllers;
// Son las bibliotecas por defautl o componentes de codelgniter
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class ApiController extends Controller
{
    use ResponseTrait;
// lllaves de acceso para la api de marvel 
    private $marvelPublicKey = '06898d7b9a50b8488f94b77661dd2be';
    private $marvelPrivateKey = '5a25ef6ea5ad1fe9fe543276d99a48b7305f96e9';
    private $ApiMarvelUrl = 'https://gateway.marvel.com:443/v1/public/characters?name=Nestor&apikey=806898d7b9a50b8488f94b77661dd2be';

    // craeacion de la funcion para obtener los datos de la api de marvel 
    public function getPersonajesMarvel()
    {
        // Parametros que requiere la api
        $parametros = [
            'ts' => time(),
            'apikey' => $this->marvelPublicKey,
            'hash' => md5(time() . $this->marvelPrivateKey . $this->marvelPublicKey),
        ];

        // Solicitud HTTP
        // Realiza la solicitud a la api
        $url = $this->ApiMarvelUrl . '?' . http_build_query($parametros);
        $cliente = \Config\Services::curlrequest();
        $respuesta = $cliente->request('GET', $url);

        // Decodifica la respuesta JSON
        $datos = json_decode($respuesta->getBody(), true);

        // Devuelve la respuesta como JSON
        return $this->response->setJSON($datos);
    }
}
