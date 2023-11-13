<?php

namespace Src\Templates\Title;

use Src\Templates\Title\TitleTemplate;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}
