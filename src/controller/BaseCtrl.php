<?php

namespace App\Controller;

abstract class BaseCtrl
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
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
