<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;

use PHPUnit\Framework\TestCase;


class UnderscoreToCamelCaseConverterTest extends TestCase
{

    /**
    * @covers \BartoszBartniczak\NamingConventionConverter\UnderscoreToCamelCaseConverter::convert
    */
    public function testConvert(){

        $converter = new UnderscoreToCamelCaseConverter();

        $this->assertInstanceOf(Converter::class, $converter);
        $this->assertSame('underscoreToCamelCaseConverter', $converter->convert('underscore_to_camel_case_converter'));

    }

}
