<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionDemoBlock_1_0_0_CreateDemoBlockFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionDemoBlock_1_0_0_CreateDemoBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'   => 'anomaly.field_type.text',
        'content' => 'anomaly.field_type.wysiwyg'
    ];

}
