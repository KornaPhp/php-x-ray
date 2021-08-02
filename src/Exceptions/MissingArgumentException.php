<?php

namespace Permafrost\RayScan\Exceptions;

class MissingArgumentException extends \Exception
{
    public static function make(string $message): self
    {
        return new static($message);
    }

}