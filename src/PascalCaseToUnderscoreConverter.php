<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


class PascalCaseToUnderscoreConverter implements Converter
{
    public function convert(string $string):string
    {
        $arr = preg_split('/(?=[A-Z])/', $string);
        array_shift($arr);
        $string = join('_', $arr);
        $string = strtolower($string);
        return $string;
    }


}