<? namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    function getUsuarioById($id){
        $tabla = $this->db->table('t_usuarios');
        return $tabla->where('id', $id)->get()->getResultArray();
    }
    function getUsuario(){
        $tabla = $this->db->table('t_usuarios');
        return $tabla->get()->getResultArray();
    }
    function insertarUsuario($data){
        $tabla = $this->db->table('t_usuarios');
        $tabla->insert($data);

        return $this->db->insertID();
    }
} 

// modelo: es el que almacena y administra la informacion (BD)