<?php
/**
 * Plugin Name: WordPress Change Category List
 * Plugin URI:  https://github.com/pontusab/WordPress-Category-List
 * Description: Change category list in edit 
 * Version:     2012.12.26
 * Author:      Pontus Abrahamsson <info@wdlinkoping.se>
 * Author URI:  http://pontusab.se
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright (c) 2012 Pontus Abrahamsson
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */


function wpse_prevent_on_top_cat() {
    // Run only in admin
    if( is_admin() ) {
        // Change checked_ontop to false
        $args['checked_ontop'] = false;
        // Return the new parameter
        return $args;
    }
}
add_action('wp_terms_checklist_args', 'wpse_prevent_on_top_cat');