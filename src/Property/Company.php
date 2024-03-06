<?php

declare(strict_types=1);

namespace JeroenDesloovere\VCard\Property;

use JeroenDesloovere\VCard\Formatter\Property\NodeFormatterInterface;
use JeroenDesloovere\VCard\Formatter\Property\CompanyFormatter;
use JeroenDesloovere\VCard\Parser\Property\CompanyParser;
use JeroenDesloovere\VCard\Parser\Property\NodeParserInterface;

use JeroenDesloovere\VCard\Property\Value\StringValue;

final class Company extends StringValue implements PropertyInterface, SimpleNodeInterface
{
    public function getFormatter(): NodeFormatterInterface
    {
        return new CompanyFormatter($this);
    }

    public static function getNode(): string
    {
        return 'ORG';
    }

    public static function getParser(): NodeParserInterface
    {
        return new CompanyParser();
    }

    public function isAllowedMultipleTimes(): bool
    {
        return false;
    }
}
