<?php
declare(strict_types=1);

namespace NamelessCoder\FluidDocumentationGenerator\Converter;

class MarkdownToRstConverter implements ConverterInterface
{
    public function convert(string $input): string
    {
        $fileName = tempnam(sys_get_temp_dir(), 'pandocinput.md');
        $temp = fopen($fileName, 'w+');
        fwrite($temp, $input);
        fclose($temp);

        $command = 'pandoc -f markdown -t rst ' . $fileName;
        $output = '';

        exec($command, $output);
        unlink($fileName);

        return implode(PHP_EOL, $output);
    }
}
