<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Provider;

/**
 * @package  Dhl\Express\Test\Provider
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class WsdlProvider
{
    /**
     * @return string
     */
    public static function getWsdlFile()
    {
        return __DIR__ . '/_files/expressRateBook.wsdl';
    }
}
