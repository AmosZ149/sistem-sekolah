<?PHP

require_once './app/core/Router.php';

use app\core\Router;

$router = new Router();

$router->add('GET', '/students', 'StudentController', 'function');
$router->add('GET', '/students/create', 'StudentController', 'function');


$router->run();
{
  
}

?>