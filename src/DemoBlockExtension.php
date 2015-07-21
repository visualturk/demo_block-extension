<?php namespace Anomaly\DemoBlockExtension;

use Anomaly\BlocksModule\Type\BlockTypeExtension;

/**
 * Class DemoBlockExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DemoBlockExtension
 */
class DemoBlockExtension extends BlockTypeExtension
{

    /**
     * This extension provides the demo
     * block for the Blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.demo';

}
