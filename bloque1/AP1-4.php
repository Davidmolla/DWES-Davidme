<?php
// Funciones
function areaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

function areaRectangulo($base, $altura) {
    return $base * $altura;
}

function areaCirculo($radio) {
    return pi() * ($radio * $radio);
}

echo "Calculadora de áreas<br>";
echo "1. Triángulo<br>";
echo "2. Rectángulo<br>";
echo "3. Círculo<br><br>";

// Pedimos que elija una figura
if (!isset($_POST['opcion'])) {
    echo '<form method="post">
            <label>Elige figura (1-3):</label>
            <input type="number" name="opcion" required>
            <button>OK</button>
          </form>';
} else {
    $op = $_POST['opcion'];

    // Opcion Triángulo
    if ($op == 1) {
        if (isset($_POST['base'], $_POST['altura'])) {
            echo "Área del triángulo = " . areaTriangulo($_POST['base'], $_POST['altura']);
        } else {
            echo '<form method="post">
                    <input type="hidden" name="opcion" value="1">
                    Base: <input type="number" name="base" step="any" required><br>
                    Altura: <input type="number" name="altura" step="any" required><br>
                    <button>Calcular</button>
                  </form>';
        }
    } // Opcion Rectángulo
    elseif ($op == 2) {
        if (isset($_POST['base'], $_POST['altura'])) {
            echo "Área del rectángulo = " . areaRectangulo($_POST['base'], $_POST['altura']);
        } else {
            echo '<form method="post">
                    <input type="hidden" name="opcion" value="2">
                    Base: <input type="number" name="base" step="any" required><br>
                    Altura: <input type="number" name="altura" step="any" required><br>
                    <button>Calcular</button>
                  </form>';
        }
    } // Opcion Círculo
    elseif ($op == 3) {
        if (isset($_POST['radio'])) {
            echo "Área del círculo = " . areaCirculo($_POST['radio']);
        } else {
            echo '<form method="post">
                    <input type="hidden" name="opcion" value="3">
                    Radio: <input type="number" name="radio" step="any" required><br>
                    <button>Calcular</button>
                  </form>';
        }
    }
}
?>
