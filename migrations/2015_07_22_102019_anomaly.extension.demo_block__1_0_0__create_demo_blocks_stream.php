<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionDemoBlock_1_0_0_CreateDemoBlocksStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionDemoBlock_1_0_0_CreateDemoBlocksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'demo_blocks',
        'title_column' => 'title',
        'translatable' => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title'   => [
            'required'     => true,
            'translatable' => true
        ],
        'content' => [
            'required'     => true,
            'translatable' => true
        ]
    ];

}
