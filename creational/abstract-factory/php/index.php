<?php

use Src\Factories\PHPTemplateFactory;
use Src\Page;

require_once "./vendor/autoload.php";

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());
