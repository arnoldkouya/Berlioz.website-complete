<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2020 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace Berlioz\Core\Tests\Package;

use Berlioz\Core\Package\AbstractPackage;

class FakePackage3 extends AbstractPackage
{
    public static function config()
    {
        return ['package3' => ['foo' => 'bar']];
    }
}