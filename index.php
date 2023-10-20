<?php require_once "layout/BaseLayout.php";
require_once "config/configControllers.php";
BaseLayout::renderHead();

/**************** CONTROLADOR FRONTAL *********************/

// Definimos un ontrolador por defecto
$controller = DEFAULT_CONTROLLER;

// Tomamos el controlador requerido por el usuario
// en caso de no especificarse seleccionamos el controlador por defecto.
if(!empty($_GET['controller']))
{
    $controller = $_GET['controller'];
}

// Definimos una acción por defecto
$action = DEFAULT_ACTION;

// Tomamos la accion requerida por el usuario
// en caso de no especificarse seleccionamos la acción por defecto.
if(!empty($_GET['action']))
{
    $action = $_GET['action'];
}

$subaction = false;

if(!empty($_GET['subaction']))
{
    $subaction = $_GET['subaction'];
}

//var_dump($controller, $action, $subaction);

// Ya tenemos el controlador y la accion
// Formamos el nombre del fichero que contiene nuestro controlador
$fullController = CONTROLLERS_DIR . ucfirst($controller) . "Controller.php";

$controller = $controller . "Controller";

// Si la variable ($controller) es un fichero lo requerimos
if(is_file($fullController))
{
    require_once ($fullController);
    $printController = new $controller();
}
else
{
    die("<h1>Controlador no localizado - 404 Not Found</h1>");
}

// Si la variable $action es una función la ejecutamos o detenemos el script, siempre y cuando $subaction contenga null
if(method_exists($printController, $action) && !$subaction) {

    $printController->$action();
}
else if(is_int((int) $action) && !$subaction)
{   
    $printController->show((int) $action);
}
else if(is_int((int) $action) && $subaction) //Pero en caso que $subaction esté definida, se ejecutará esa subacción
{ 
    $printController->$subaction($action);
}
else
{
    die("<h1>Metodo no definido - 404 Not Found</h1>");
}


BaseLayout::renderFoot();