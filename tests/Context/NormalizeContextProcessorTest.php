<?php
declare(strict_types=1);

namespace Jamarcer\DDDLogging\Tests\Context;

use Jamarcer\DDDLogging\Context\NormalizeMessageProcessor;
use PHPUnit\Framework\TestCase;

final class NormalizeContextProcessorTest extends TestCase
{
    public function testShouldReturnedRecordWithoutMessage()
    {
        $record = [
            'context' => []
        ];

        $result = (new NormalizeMessageProcessor())($record);

        $this->assertEquals($record, $result);
    }

    public function testShouldReturnedRecordWithEncodedMessage()
    {
        $record = [
            'context' => [
                'message' => [
                    'This is a message',
                ],
            ],
        ];

        $expectedEncodedMessage = \json_encode($record['context']['message']);

        $result = (new NormalizeMessageProcessor())($record);

        $this->assertEquals($expectedEncodedMessage, $result['context']['message']);
    }
}