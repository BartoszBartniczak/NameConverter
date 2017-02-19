<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


class UnderscoreToPascalCaseConverter implements Converter
{

    public function convert(string $string): string
    {
        $arr = explode('_', $string);
        $arr = array_map(function ($word) {
            return ucfirst($word);
        }, $arr);
        return implode('', $arr);
    }

}