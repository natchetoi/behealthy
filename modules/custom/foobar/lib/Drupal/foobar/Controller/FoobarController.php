<?php
/**
 * @page
 *
 * Settings page
 */
namespace Drupal\foobar\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FoobarController implements ControllerInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  /**
   * Функция(метод), которая вернет нам данные при переходе на определенную страницу.
   */
  public function foobarPage() {
    return array(
      '#markup' => t('This is the demo foobar page.'),
    );
  }

}
