<?php

/**
 * @license Apache 2.0
 */

namespace SwaggerTests;

use Swagger\Util;

class UtilTest extends SwaggerTestCase
{

    function testExclude()
    {
        $swagger = \Swagger\scan(__DIR__ . '/Fixtures', ['Customer.php', 'UsingRefs.php']);
        $this->assertSame('Fixture for ParserTest', $swagger->info->title, 'No errors about duplicate @SWG\Info() annotations');
    }
}
