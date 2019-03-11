<?php

declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Converter;

interface ConverterInterface
{
    /**
     * Receives the input in format a and returns output in format b.
     */
    public function convert(string $input): string;
}
