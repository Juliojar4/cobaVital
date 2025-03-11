<?php

namespace App\Providers;

use App\ACF\Blocks\LargeIconBoxHome;  
use App\ACF\Blocks\ImageSliderBlock;

class RegisterACF {
    public static function init() {
        add_action('acf/init', function() {
            LargeIconBoxHome::register();
            ImageSliderBlock::register();

        });
    }
}
