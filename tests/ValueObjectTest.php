<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2016 Artem Rodygin
//
//  You should have received a copy of the GNU General Public License
//  along with the file. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

namespace DataTables;

class ValueObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testIsSet()
    {
        $object = new MyTestClass();

        self::assertTrue(isset($object->property));
        self::assertFalse(isset($object->unknown));
    }

    public function testGetPropertySuccess()
    {
        $object   = new MyTestClass();
        $expected = mt_rand();

        $object->setProperty($expected);

        self::assertEquals($expected, $object->property);
    }

    /**
     * @expectedException \Exception
     */
    public function testGetPropertyFailure()
    {
        $object = new MyTestClass();

        /** @noinspection PhpUndefinedFieldInspection */
        echo $object->unknown;
    }
}
