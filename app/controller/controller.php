<?php
require __DIR__ . '/../conexion.php';


/*require("app/conexion.php");*/ // Incluye la conexión a la base de datos

class pinturaController
{
    private $conexion;

    function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    public function index()
    {
        $query = "SELECT * FROM pintura";
        $stmt = $this->conexion->query($query);
        $rowset = $stmt->fetchAll(PDO::FETCH_OBJ);
        require __DIR__ . '/../view/todosRegistros.php';
    }


    public function agregar()
    {
        require __DIR__ . '/../view/agregar.php';

    }

    public function guardar($marca,$modelo, $color, $precio, $plan)
    {
        $query = "INSERT INTO pintura (Marca, linea, Color, Precio, cantidad) VALUES (:Marca, :Modelo, :Color, :Precio, :plan)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':Marca', $marca);
        $stmt->bindParam(':linea', $modelo);
        $stmt->bindParam(':Color', $color);
        $stmt->bindParam(':Precio', $precio);
        $stmt->bindParam(':cantidad', $plan);
        $stmt->execute();

        header("Location: index.php");
        exit();
    }

    public function editarPrecio($id)
    {
        $row = $this->obtenerpinturaId($id); // Usa el nuevo método
        if ($row) {
            require __DIR__ . '/../view/editarPrecio.php';

        } else {
            $this->index();
        }
    }

    public function actualizarEquipo($id,$marca, $linea, $color, $precio, $cantidad)
    {
        $query = "UPDATE celulares 
                  SET marca = :Marca, 
                      linea = :linea, 
                      color = :Color, 
                      precio = :Precio, 
                      cantidad = :cantidad 
                  WHERE id = :id";
    
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':Marca', $marca);
        $stmt->bindParam(':linea', $linea);
        $stmt->bindParam(':Color', $color);
        $stmt->bindParam(':Precio', $precio);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        header("Location: index.php");
        exit();
    }

    public function eliminar($id)
    {
        if (isset($_GET['confirmar'])) {
            //  elimina el videojuego
            $query = "DELETE FROM pintura WHERE id = :id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            header("Location: index.php");
            exit();
        } else {
            // 
            $row = $this->obtenerpinturaId($id);
            if ($row) {
                require("view/eliminar.php"); // Muestra la confirmación de eliminación
            } else {
                header("Location: index.php"); // Si no existe, redirige al menu
            }
        }
    }

    public function obtenerpinturaId($id)
    {
        $query = "SELECT * FROM pintura WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ); // Retorna no existe
    }
}
?>