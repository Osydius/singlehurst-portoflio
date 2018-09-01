<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $currentController = null;
    public $currentAction = null;

    public function __construct() {
        $route = app('request')->route();
        $routeAction = $route->getAction();

        if (!empty($routeAction['controller'])) {
            $controllerAction = class_basename($routeAction['controller']);

            list($this->currentController, $this->currentAction) = explode('@', $controllerAction, 2);

            $controllerName = str_replace('Controller', '', $this->currentController);
            $controllerName = strtolower($controllerName);

            $modelName = str_singular($controllerName);

            if ($this->_routeExists($controllerName . '.create')) {
                view()->share(['createAction' => $controllerName . '.create']);
            }

            if ($route->{$modelName}) {
                $modelBind = $route->{$modelName};

                view()->share(['modelBind' => $modelBind]);

                if ($this->_routeExists($controllerName . '.edit', [$modelBind])) {
                    view()->share(['editAction' => $controllerName . '.edit']);
                }

                if ($this->_routeExists($controllerName . '.destroy', [$modelBind])) {
                    view()->share(['deleteAction' => $controllerName . '.destroy']);
                }
            }

            view()->share([
                'currentController' => $this->currentController,
                'currentAction' => $this->currentAction,
                'controllerName' => $controllerName,
                'modelName' => $modelName,
            ]);
        }
    }

    protected function _routeExists($action, $routeData = []) {
        try {
            route($action, $routeData);
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}
