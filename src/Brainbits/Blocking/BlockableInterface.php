<?php
/**
 * This file is part of the brainbits blocking package.
 *
 * @copyright 2012-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   http://www.brainbits.net/LICENCE     Dummy Licence
 */

namespace Brainbits\Blocking;

use Brainbits\Blocking\Identifier\IdentifierInterface;

/**
 * Blockable interface
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
interface BlockableInterface
{
    /**
     * Return block identifier
     *
     * @return IdentifierInterface
     */
    public function getBlockIdentifier();
}