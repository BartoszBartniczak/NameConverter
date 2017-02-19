<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


use PHPUnit\Framework\TestCase;


class UnderscoreToPascalCaseConverterTest extends TestCase
{

    /**
    * @covers \BartoszBartniczak\NamingConventionConverter\UnderscoreToPascalCaseConverter::convert
    */
    public function testConvert(){

        $converter = new UnderscoreToPascalCaseConverter();
        $this->assertInstanceOf(Converter::class, $converter);
        $this->assertSame('UnderscoreToPascalCaseConverter', $converter->convert('underscore_to_pascal_case_converter'));
    }

}
