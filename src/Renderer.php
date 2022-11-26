<?php

namespace Source;

class Renderer
{
    private $viewPath;
    private ?array $params;

    public function __construct($viewPath, $params)
    {
        $this->viewPath = $viewPath;
        $this->params = $params;
    }

    public function view()
    {
        ob_start();

        extract($this->params);

        require BASE_VIEW_PATH . $this->viewPath . '.php';

        return ob_get_clean();
    }

    public static function make($viewPath, $params)
    {
        return new static($viewPath, $params);
    }

    public function __toString()
    {
        return $this->view();
    }
}
// preg_replace('#:([\w]+)#', '([^/]+)', $viewPath);