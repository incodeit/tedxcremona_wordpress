=== Flexible Content Extended for Advanced Custom Fields ===
Contributors: jameelmoses
Donate link: http://paypal.me/jameelmoses
Tags: acf, advanced, custom, field, fields, addon, flexible, content, preview, modal
Requires at least: 4.7.0
Requires PHP: 5.6
Tested up to: 5.5.1
Stable tag: 1.0.7
License: GPLv3 or later
License URI: https://github.com/jameelmoses/acf-flexible-content-extended/blob/master/LICENSE.md

Extends the ACF Flexible Content Field by transforming the layout list into a modal with image previews. Editing the fields layouts also happens in a modal for a better editing user experience.

== Description ==

Extends the ACF Flexible Content Field by transforming the layout list into a modal with image previews. Editing the fields layouts also happens in a modal for a better editing user experience.

= Image Conventions =

* The size of the image should be 730 x 300.
* They should be named based on the layout's name (`text_block`) with underscores converted to dashes (`text-block.jpg`).

= Image Location =

Images should be placed in your theme. By default, images are located here: `THEME/lib/admin/images/acf-flexible-content-extended`.

Also note that you can filter this path, but it **MUST** be in your theme:

`add_filter( 'acf-flexible-content-extended.images_path', $path );`

**NOTE:** The path should not have a trailing beginning or trailing slash!

Additionally, you could filter all keys and/or images:

`add_filter( 'acf-flexible-content-extended.images', $images );`

= Issues & Feature Requests =

If you identify any errors or have an idea for improving the plugin, feel free to open an [issue](https://github.com/jameelmoses/acf-flexible-content-extended/issues) or [create a pull request](https://github.com/jameelmoses/acf-flexible-content-extended/pulls). Please provide as much info as needed in order to help resolving or approve your request.

== Installation ==

This plugin works only if the [ACF Pro >= 5.7.O](https://www.advancedcustomfields.com/) plugin is installed and activated.

# Requirements

- [ACF Pro >= 5.7.O](https://www.advancedcustomfields.com/)
- WordPress 4.7+ because of [get_theme_file_uri()](https://developer.wordpress.org/reference/functions/get_theme_file_uri)
- Tested up to WP 5.3
- Browser Support:
  - Last 2 Firefox major versions
  - Last 2 Safari major versions
  - Last 2 Edge major versions
  - Last 2 Chrome major versions
- PHP 5.6+

From your WordPress dashboard

1. **Visit** Plugins > Add New
2. **Search** for "Flexible Content Extended for Advanced Custom Fields"
3. **Activate** Flexible Content Extended for Advanced Custom Fields from your Plugins page
4. **Add images** to your theme in `THEME/lib/admin/images/acf-flexible-content-extended` or customize the path using `add_filter( 'acf-flexible-content-extended.images_path', $path );`

== Screenshots ==

1. Screenshot of Flexible Content Field Layouts Add Modal
2. Screenshot of Flexible Content Field Layouts
3. Screenshot of Flexible Content Field Layout Edit Modal

== Changelog ==

= 1.0.7 =
*Release Date - 18 Aug 2020*

* Resolve JS bug

= 1.0.6 =
*Release Date - 18 Aug 2020*

* Resolve issue with modals related to new duplicate layout function in ACF 5.9

= 1.0.5 =
*Release Date - 18 Aug 2020*

* Resolve JS error if acf.getField() is not defined

= 1.0.4 =
*Release Date - 18 Aug 2020*

* Update hook for enqueuing and registering assets for ACF 5.9 compatibility. Thanks @elliottpost!

= 1.0.3 =
*Release Date - 7 Apr 2020*

* Fixes a bug related to nested fields

= 1.0.2 =
*Release Date - 6 Apr 2020*

* Supporting nested flexible content fields
* Updating dependencies

= 1.0.1 =
*Release Date - 2 Dec 2019*

* Updating dependencies

= 1.0.0 =
*Release Date - 26 Aug 2019*

* Initial release
