<?php

namespace Spec\Quickstart\AppBundle\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VersionSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('version', true);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Quickstart\AppBundle\Service\Version');
    }

    function it_should_get_current_version()
    {
        $this->current()
            ->shouldReturn('-- unknown --');
    }
}
