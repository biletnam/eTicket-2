<?php

require_once __DIR__.'/../vendor/autoload.php';

abstract class BaseCtrl
{
    /**
     * @var Twig_Environment
     */
    protected $twig;

    public function __construct()
    {
        $loader     = new Twig_Loader_Filesystem([
            __DIR__.'/../templates',
        ]);
        $this->twig = new Twig_Environment($loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }

    /**
     * @param string $template
     * @param array  $context
     *
     * @return string
     */
    protected function render($template, array $context = [])
    {
        return $this->twig->render($template, $context);
    }
}