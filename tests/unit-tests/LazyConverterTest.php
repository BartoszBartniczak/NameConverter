<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Bartniczak <kontakt@bartoszbartniczak.pl>
 */

namespace BartoszBartniczak\NamingConventionConverter;

use PHPUnit\Framework\TestCase;

class LazyConverterTest extends TestCase
{

    /**
     * @covers \BartoszBartniczak\NamingConventionConverter\LazyConverter::convert
     */
    public function testConvert()
    {

        $converter = new LazyConverter();

        $this->assertInstanceOf(Converter::class, $converter);
        $this->assertSame('LazyConverter', $converter->convert('LazyConverter'));
        $this->assertSame('lazy_converter', $converter->convert('lazy_converter'));
    }

}
