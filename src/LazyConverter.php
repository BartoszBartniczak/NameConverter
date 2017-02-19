<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


class LazyConverter implements Converter
{
    public function convert(string $string): string
    {
        return $string;
    }


}