<?php

namespace App\Providers;

use App\ACF\Blocks\LargeIconBoxHome;  
use App\ACF\Blocks\ImageSliderBlock;
use App\ACF\Blocks\Faq;
use App\ACF\Blocks\PostList;
use App\ACF\Blocks\HomeHero;
use App\ACF\Blocks\Accordion;


class RegisterACF {
    public static function init() {
        add_action('acf/init', function() {
            LargeIconBoxHome::register();
            ImageSliderBlock::register();
            Faq::register();
            PostList::register();
            HomeHero::register();
            Accordion::register();

        });
    }
}
