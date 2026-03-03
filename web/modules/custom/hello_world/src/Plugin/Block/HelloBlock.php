<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a 'Hello' Block.
 */

#[Block(
    id: "hello_block",
    admin_label: new TranslatableMarkup("Hello block"),
    category: new TranslatableMarkup("Hello World")
)]

class HelloBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#theme' => 'hello_block',
            '#custom_data' => ['name' => 'Hiba', 'age' => 23],
            '#custom_string' => 'Hello Block',
        ];
    }
}
