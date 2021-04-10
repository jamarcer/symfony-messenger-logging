<?php
declare(strict_types=1);

namespace Jamarcer\DDDLogging\MessageLogger;

interface Action
{
    public function success(): string;
    public function error(): string;
}
