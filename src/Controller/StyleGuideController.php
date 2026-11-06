<?php

declare(strict_types=1);

namespace Drupal\daisyui_style_guide\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for DaisyUI Style Guide routes.
 */
final class StyleGuideController extends ControllerBase {

  /**
   * Builds the style guide page.
   *
   * @return array
   *   A render array representing the style guide.
   */
  public function content(): array {
    return [
      '#theme' => 'daisyui_style_guide',
    ];
  }

}
