<?php
namespace App\Core;

class Router {
    public function handle(Request $request): void {
        $rutas = json_decode(file_get_contents(__DIR__ . '/../../config/rutas.json'), true);
        $route = $request->getRoute();

        if (isset($rutas[$route])) {
            $controllerName = $rutas[$route]['controller'];
            $action = $rutas[$route]['action'];

            $controller = new $controllerName();
            call_user_func_array([$controller, $action], $request->getParams());
        } else {
            echo "Ruta no encontrada: " . htmlspecialchars($route);
        }
    }
}
?>
