<?php

/**
 * @file
 * Contains \Drupal\tagclouds\Plugin\Derivative\TagcloudsTermsBlock.
 */

namespace Drupal\tagclouds\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DerivativeBase;

/**
 * Provides block plugin definitions for mymodule blocks.
 *
 * @see \Drupal\tagclouds\Plugin\Block\TagcloudsTermsBlock
 */
class TagcloudsTermsBlock extends DerivativeBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    foreach (entity_load_multiple('taxonomy_vocabulary') as $voc) {
      $this->derivatives[$voc->id()] = $base_plugin_definition;
      $this->derivatives[$voc->id()]['admin_label'] = $this->t('Tags in @voc', array('@voc' => $voc->name));
    }
    return $this->derivatives;
  }

}
