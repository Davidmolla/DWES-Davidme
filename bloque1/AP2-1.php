<?php
// Clase base VehiculoDeCarrera
class VehiculoDeCarrera {
    // Atributos protegidos
    protected $fabricante;
    protected $modelo;
    protected $velMax;
    protected $nivelCombustible;

    // Constructor
    public function __construct($fabricante, $modelo, $velMax, $nivelCombustible) {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->velMax = $velMax;
        $this->nivelCombustible = $nivelCombustible;
        echo "Se ha creado el vehículo $fabricante $modelo correctamente.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "El vehículo $this->fabricante $this->modelo ha salido de la pista.<br>";
    }

    // Metodo para encenderlo
    public function encender() {
        echo "$this->fabricante $this->modelo está encendido y listo.<br>";
    }

    // Metodo para augmentar la velocidad
    public function aumentarVelocidad() {
        if ($this->nivelCombustible > 0) {
            $this->velMax += 15;
            $this->usarCombustible();
            echo "$this->fabricante $this->modelo acelera. Velocidad actual: $this->velMax km/h.<br>";
        } else {
            echo "$this->fabricante $this->modelo no puede acelerar, no tiene combustible.<br>";
        }
    }

    // Metodo freno
    public function frenar() {
        $this->velMax = 0;
        echo "$this->fabricante $this->modelo se ha detenido completamente.<br>";
    }

    // Mostrar estado actual del coche
    public function estadoActual() {
        echo "Estado de $this->fabricante $this->modelo: Velocidad = $this->velMax km/h, Combustible = $this->nivelCombustible litros.<br>";
    }

    // Metodo protegido
    protected function usarCombustible() {
        $this->nivelCombustible -= 7;
    }
}

// Clase hija FormulaUno
class FormulaUno extends VehiculoDeCarrera {
    private $sistemaAleron;

    // Constructor
    public function __construct($fabricante, $modelo, $velMax, $nivelCombustible, $sistemaAleron) {
        parent::__construct($fabricante, $modelo, $velMax, $nivelCombustible);
        $this->sistemaAleron = $sistemaAleron;
    }

    // Metodo DRS
    public function usarDRS() {
        if ($this->sistemaAleron) {
            $this->velMax += 25;
            echo "$this->fabricante $this->modelo activó el DRS. Nueva velocidad: $this->velMax km/h.<br>";
        } else {
            echo "$this->fabricante $this->modelo no cuenta con un DRS disponible.<br>";
        }
    }
}

// Clase hija FormulaE
class FormulaE extends VehiculoDeCarrera {
    private $nivelBateria;

    // Constructor
    public function __construct($fabricante, $modelo, $velMax, $nivelCombustible, $nivelBateria) {
        parent::__construct($fabricante, $modelo, $velMax, $nivelCombustible);
        $this->nivelBateria = $nivelBateria;
    }

    // Metodo recargar Bateria
    public function recargarBateria() {
        $this->nivelBateria += 15;
        echo "$this->fabricante $this->modelo está recargando. Nivel actual de batería: $this->nivelBateria%<br>";
    }
}
?>
