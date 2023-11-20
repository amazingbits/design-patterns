<?php

namespace Src\Login;

use Src\Login\Business\CheckRequestStructure;
use Src\Login\Business\IsEmail;
use Src\Login\Business\MinimalCharacters;

class Login
{
    private array $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function doLogin(array $request): void
    {
        $checkRequestStructure = new CheckRequestStructure();
        $checkRequestStructure->setNext(new IsEmail())->setNext(new MinimalCharacters());

        echo "<pre>";
        if($response = $checkRequestStructure->handle($request)) {
            echo $response;
        } else {
            echo "Login successful";
        }
        echo "</pre>";
    }
}
