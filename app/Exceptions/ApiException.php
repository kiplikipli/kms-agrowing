<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ApiException extends Exception
{
    public $type;

    public function __construct($type, $message = '', $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->type = $type;
    }
}
