<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


use PHPUnit\Framework\TestCase;

class CamelCaseToUnderscoreConverterTest extends TestCase
{

    /**
    * @covers \BartoszBartniczak\NamingConventionConverter\CamelCaseToUnderscoreConverter::convert
    */
    public function testConvert(){

        $converter= new CamelCaseToUnderscoreConverter();

        $this->assertInstanceOf(Converter::class, $converter);
        $this->assertSame('camel_case_to_underscore_converter', $converter->convert('camelCaseToUnderscoreConverter'));

    }

}
