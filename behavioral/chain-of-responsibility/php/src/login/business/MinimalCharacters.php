<?php

namespace Src\Login\Business;

use Src\Login\ValidateLogin;

class MinimalCharacters extends ValidateLogin
{
    public function handle(array $request): string | null
    {
        if(strlen($request['password']) < 3) {
            return 'Password must be at least 3 characters';
        }
        return parent::handle($request);
    }
}
