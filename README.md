# DaisyUI Style Guide for Drupal

A self-contained, turnkey style guide module for Drupal 10 and 11 sites powered by Tailwind CSS and DaisyUI (`daisyui_sdc`).

## Features
- **Zero Configuration**: Automatically registers the `/style-guide` route without requiring any nodes or database entries.
- **Dynamic Fonts**: Uses `document.fonts` and CSS computed styles to automatically detect and display the active theme's web fonts and type scales.
- **Dynamic Color Roles**: Showcases the active DaisyUI semantic color tokens and themes (`default`, `coffee`, `valentine`, `bumblebee`, etc.).
- **SDC Showcases**: Live examples of DaisyUI Single Directory Components (buttons, badges, dividers, lists, pricing cards, teasers, and heroes).

## Installation
Drop this module into `web/modules/custom/daisyui_style_guide` and enable it:
```bash
drush en daisyui_style_guide
```

Visit `/style-guide` in your browser.
