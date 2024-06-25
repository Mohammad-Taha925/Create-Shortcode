# Create a Shortcode

This snippet demonstrates how to create a custom shortcode in WordPress. Shortcodes allow you to add custom content or functionality to posts, pages, and widgets with ease.

## Usage

1. **Installation**:
   - Copy `create-shortcode.php` into your theme's directory or include it in your plugin.

2. **Usage**:
   - Use the shortcode `[custom]` in your posts, pages, or widgets to display the custom content defined in the `custom_shortcode()` function.

## Functions

- `add_shortcode`: Registers a new shortcode with WordPress.
- `custom_shortcode()`: Defines the callback function for the `[custom]` shortcode, returning custom HTML content.

## Author

Created by Taha Shabirr, a WordPress developer specializing in custom themes and plugins.

## License

This project is licensed under the [MIT License](LICENSE).
