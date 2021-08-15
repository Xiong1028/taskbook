<?php

/**
 * Plugin Name:       TaskBook 
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Track stress levels around tasks.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            XY 
 * Author URI:        https://xy.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       taskbook
 * Domain Path:       /languages
 * TaskBook is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.

 * TaskBook is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with TaskBook. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

/* Register Task post type */
require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';
register_activation_hook(__FILE__, 'taskbook_rewrite_flush');


/* Register Task Logger role */
require_once plugin_dir_path(__FILE__) . 'includes/roles.php';
register_activation_hook(__FILE__, 'taskbook_register_role');
register_deactivation_hook(__FILE__, 'taskbook_remove_role');


/* Add and remove capabilities */
register_activation_hook(__FILE__, 'taskbook_add_capabilities');
register_deactivation_hook(__FILE__, 'taskbook_remove_capabilities');
