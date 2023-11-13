<?php

namespace Src\Templates\Page;

class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedFile = $this->titleTemplate->getTemplateString();
        return <<<HTML
        <div class="page">
            $renderedFile
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}
