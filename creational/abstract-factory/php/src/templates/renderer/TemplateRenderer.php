<?php

namespace Src\Templates\Renderer;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
