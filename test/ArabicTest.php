<?php
/**
 * ArabicTest.php
 *
 * @since       2011-05-23
 * @category    Library
 * @package     PdfFontData
 * @author      Nicola Asuni <info@tecnick.com>
 * @copyright   2011-2015 Nicola Asuni - Tecnick.com LTD
 * @license     http://www.gnu.org/copyleft/lesser.html GNU-LGPL v3 (see LICENSE.TXT)
 * @link        https://github.com/tecnickcom/tc-lib-pdf-font-data
 *
 * This file is part of tc-lib-pdf-font-data software library.
 */

namespace Test;

/**
 * Arabic Test
 *
 * @since       2011-05-23
 * @category    Library
 * @package     PdfFontData
 * @author      Nicola Asuni <info@tecnick.com>
 * @copyright   2011-2015 Nicola Asuni - Tecnick.com LTD
 * @license     http://www.gnu.org/copyleft/lesser.html GNU-LGPL v3 (see LICENSE.TXT)
 * @link        https://github.com/tecnickcom/tc-lib-pdf-font-data
 */
class ArabicTest extends \PHPUnit_Framework_TestCase
{
    public function testDiacritic()
    {
        $this->assertEquals(5, count(\Com\Tecnick\Pdf\Font\Data\Arabic::$diacritic));
    }

    public function testlaa()
    {
        $this->assertEquals(4, count(\Com\Tecnick\Pdf\Font\Data\Arabic::$laa));
    }

    public function testSubstitute()
    {
        $this->assertEquals(76, count(\Com\Tecnick\Pdf\Font\Data\Arabic::$substitute));
    }
}