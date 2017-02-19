<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


class UnderscoreToCamelCaseConverter implements Converter
{
    public function convert(string $string):string
    {

        $arr = explode('_', $string);
        $firstWord = $arr[0];
        $arr = array_map(function ($word) {
            return ucfirst($word);
        }, array_slice($arr, 1));
        return $firstWord.implode('', $arr);
    }

}