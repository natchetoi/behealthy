<?php

/**
 * @file
 * Contains \Drupal\media_entity_slideshow\Plugin\MediaEntity\Type\Slideshow.
 */

namespace Drupal\media_entity_slideshow\Plugin\MediaEntity\Type;

use Drupal\media_entity\MediaBundleInterface;
use Drupal\media_entity\MediaInterface;
use Drupal\media_entity\MediaTypeBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\media_entity\MediaTypeException;

/**
 * Provides media type plugin for Slideshows.
 *
 * @MediaType(
 *   id = "slideshow",
 *   label = @Translation("Slideshow"),
 *   description = @Translation("Provides business logic and metadata for slideshows.")
 * )
 */
class Slideshow extends MediaTypeBase {

  /**
   * {@inheritdoc}
   */
  public function providedFields() {
    $fields = array(
      'length' => t('Slideshow length'),
    );

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getField(MediaInterface $media, $name) {
    $source_field = $this->configuration['source_field'];

    switch ($name) {
      case 'length':
        return $media->{$source_field}->count();
    }

    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    /** @var MediaBundleInterface $bundle */
    $bundle = $form_state->getFormObject()->getEntity();
    $options = [];
    $allowed_field_types = ['entity_reference'];
    /** @var \Drupal\Core\Field\FieldDefinitionInterface $field */
    foreach ($this->entityFieldManager->getFieldDefinitions('media', $bundle->id()) as $field_name => $field) {
      if (in_array($field->getType(), $allowed_field_types)) {
        $storage = $field->getFieldStorageDefinition();
        if (!$storage->isBaseField() && $storage->getSetting('target_type') == 'media') {
          $options[$field_name] = $field->getLabel();
        }
      }
    }

    $form['source_field'] = [
      '#type' => 'select',
      '#title' => t('Field with source information'),
      '#description' => t('Field on media entity that stores slideshow items. You can create a bundle without selecting a value for this dropdown initially. This dropdown can be populated after adding fields to the bundle.'),
      '#default_value' => empty($this->configuration['source_field']) ? NULL : $this->configuration['source_field'],
      '#options' => $options,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function attachConstraints(MediaInterface $media) {
    parent::attachConstraints($media);

    $source_field_name = $this->configuration['source_field'];
    // Validate slideshow items count.
    $media->getTypedData()->getDataDefinition()->addConstraint('ItemsCount', array('source_field_name' => $source_field_name));
  }

  /**
   * {@inheritdoc}
   */
  public function thumbnail(MediaInterface $media) {
    $source_field = $this->configuration['source_field'];

    /** @var \Drupal\media_entity\MediaInterface $slideshow_item */
    $slideshow_item = $this->entityTypeManager->getStorage('media')->load($media->{$source_field}->target_id);
    if (!$slideshow_item) {
      return $this->config->get('icon_base') . '/slideshow.png';
    }

    /** @var \Drupal\media_entity\MediaBundleInterface $bundle */
    $bundle = $this->entityTypeManager->getStorage('media_bundle')->load($slideshow_item->bundle());
    if (!$bundle) {
      return $this->config->get('icon_base') . '/slideshow.png';
    }

    $thumbnail = $bundle->getType()->thumbnail($slideshow_item);
    if (!$thumbnail) {
      return $this->config->get('icon_base') . '/slideshow.png';
    }

    return $thumbnail;
  }
}
