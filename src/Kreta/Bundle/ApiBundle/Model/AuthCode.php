<?php

/**
 * This file belongs to Kreta.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace Kreta\Bundle\ApiBundle\Model;

use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;
use Kreta\Bundle\ApiBundle\Model\Interfaces\AuthCodeInterface;

/**
 * Class AuthCode.
 *
 * @package Kreta\Bundle\ApiBundle\Model
 */
class AuthCode extends BaseAuthCode implements AuthCodeInterface
{
}