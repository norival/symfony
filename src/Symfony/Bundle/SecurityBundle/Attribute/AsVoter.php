<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\Attribute;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

/**
 * An attribute to easily set a voter's priority when the "priority" access
 * decision strategy is used.
 *
 * @author Xavier Laviron <xavier@norival.dev>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class AsVoter extends AutoconfigureTag
{
    public function __construct(
        public int $priority = 0,
    ) {
        parent::__construct('security.voter', ['priority' => $priority]);
    }
}
