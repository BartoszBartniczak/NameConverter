<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


class CamelCaseToUnderscoreConverter implements Converter
{

    public function convert(string $string):string
    {
        $arr = preg_split('/(?=[A-Z])/', $string);
        $string = join('_', $arr);
        $string = strtolower($string);
        return $string;
    }

}