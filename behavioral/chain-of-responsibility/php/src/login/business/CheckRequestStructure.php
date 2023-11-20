<?php

namespace Src\Login\Business;

use Src\Login\ValidateLogin;

class CheckRequestStructure extends ValidateLogin
{
    public function handle(array $request): string | null
    {
        if(!isset($request['email']) || !isset($request['password'])) {
            return 'Email and password are required';
        }
        return parent::handle($request);
    }
}
