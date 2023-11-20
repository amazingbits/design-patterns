<?php

namespace Src\Login;

abstract class ValidateLogin
{
    private ValidateLogin | null $nextHandler = null;

    public function setNext(ValidateLogin $handler): ValidateLogin
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(array $request): string | null
    {
        if($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}
