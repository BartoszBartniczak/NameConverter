<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;


use PHPUnit\Framework\TestCase;


class PascalCaseToUnderscoreConverterTest extends TestCase
{

    /**
    * @covers \BartoszBartniczak\NamingConventionConverter\PascalCaseToUnderscoreConverter::convert
    */
    public function testConvert(){

        $converter = new PascalCaseToUnderscoreConverter();
        $this->assertInstanceOf(Converter::class, $converter);
        $this->assertSame('pascal_case_to_underscore_converter', $converter->convert('PascalCaseToUnderscoreConverter'));
    }

}
