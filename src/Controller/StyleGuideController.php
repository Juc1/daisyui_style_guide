<?php

declare(strict_types=1);

namespace Drupal\daisyui_style_guide\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the DaisyUI Style Guide routes.
 */
class StyleGuideController extends ControllerBase {

  /**
   * Renders the primary brand & style guide page.
   *
   * @return array
   *   A render array.
   */
  public function content(): array {
    return [
      '#theme' => 'daisyui_style_guide',
    ];
  }

  /**
   * Renders the complete DaisyUI component catalog preview.
   *
   * @return array
   *   A render array.
   */
  public function daisyuiPreview(): array {
    return [
      '#theme' => 'daisyui_preview_page',
      '#attached' => [
        'library' => [
          'daisyui_style_guide/full_daisyui',
        ],
      ],
    ];
  }

}
