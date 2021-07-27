<?php

namespace app\core;

class Router
{
    public Request $request;
    protected array $routes = [];

    /*public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }*/

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        // $this->routes[$path] = $callback;
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
       // echo '<pre>'
       // var_dump($_SERVE)
       // echo '</pre>'
       //exit;

       // testear
       $path = $this->request->getPath();
       $method = $this->request->method();

       // testear
       $callback = $this->routes[$method][$path] ?? false;

       if ($callback === false) {
            //Application::$app->response->setStatusCode(404);
            $this->response->setStatusCode(404);
           //return "Not Found";
           //$this->renderContent("Not Found");
           $this->renderView("_404");
       }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        if (is_array($callback)) {
            //$callback[0] = new $callback[0]();
            Application::$app->controler = new $callback[0]();
            $callback[0] = Application::$app->controler;
            
            //var_dump($callback);
            //exit;
        }

       //return call_user_func($callback);
       return call_user_func($callback, $this->request);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        //include_once __DIR__ . "../views/$view.php";
        //include_once Application::$ROOT_DIR . "/views/$view.php";
        $viewContent = $this->renderOnlyView($view, $params);

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        $layout = Application::$app->controler->layout;

        ob_start();
        //include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {
        //var_dump($params);
        //exit;
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();   
    }
}