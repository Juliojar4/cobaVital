<?php

namespace App\Providers;

use App\ACF\Blocks\LargeIconBoxHome;  

class RegisterACF {
    public static function init() {
        add_action('acf/init', function() {
            LargeIconBoxHome::register();

        });
    }
}
