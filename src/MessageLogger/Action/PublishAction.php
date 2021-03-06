<?php
declare(strict_types=1);

namespace Jamarcer\DDDLogging\MessageLogger\Action;

use Jamarcer\DDDLogging\MessageLogger\Action;

final class PublishAction implements Action
{
    public function success(): string
    {
        return 'A message has been published';
    }

    public function error(): string
    {
        return 'An exception occurred while publishing the message';
    }
}
