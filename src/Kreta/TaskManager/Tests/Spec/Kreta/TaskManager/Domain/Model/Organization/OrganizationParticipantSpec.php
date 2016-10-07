<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spec\Kreta\TaskManager\Domain\Model\Organization;

use Kreta\TaskManager\Domain\Model\Organization\OrganizationParticipant;
use Kreta\TaskManager\Domain\Model\Organization\OrganizationParticipantId;
use Kreta\TaskManager\Domain\Model\Organization\Participant;
use PhpSpec\ObjectBehavior;

class OrganizationParticipantSpec extends ObjectBehavior
{
    function let(OrganizationParticipantId $organizationParticipantId)
    {
        $organizationParticipantId->id()->willReturn('organization-participant-id');
        $this->beConstructedWith($organizationParticipantId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(OrganizationParticipant::class);
    }

    function it_extends_participant()
    {
        $this->shouldHaveType(Participant::class);
    }

    function it_gets_id()
    {
        $this->id()->shouldReturnAnInstanceOf(OrganizationParticipantId::class);
        $this->__toString()->shouldReturn('organization-participant-id');
    }
}