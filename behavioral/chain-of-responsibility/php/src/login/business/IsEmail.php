<?php

namespace Src\Login\Business;

use Src\Login\ValidateLogin;

class IsEmail extends ValidateLogin
{
    public function handle(array $request): string | null
    {
        if(!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            return 'Email is not valid';
        }
        return parent::handle($request);
    }
}
