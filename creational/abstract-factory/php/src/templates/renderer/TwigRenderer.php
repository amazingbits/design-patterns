<?php

namespace Src\Templates\Renderer;

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__. '/../../templates');
        $twig = new \Twig\Environment($loader);
        return $twig->render($templateString, $arguments);
    }
}
