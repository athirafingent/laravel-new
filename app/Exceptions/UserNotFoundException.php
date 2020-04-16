<?php

namespace App\Exceptions;

use Exception;

class UserNotFoundException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report1()
    {
        \Log::debug('User not found');
        \Log::info('User not found');
    }
}
