<?php
namespace App\ACF\Blocks;

use function Roots\bundle;
use function Roots\view;


class HomeHero
{
    public static function register() 
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }
        acf_add_local_field_group([
            'key'    => 'group_home_hero',
            'title'  => 'Hero da Home',
            'fields' => [
                
                [
                    'key'   => 'field_hero_image',
                    'label' => 'Imagem de fundo do hero',
                    'name'  => 'hero_background_image',
                    'type'  => 'image'
                ],
                [
                    'key'   => 'field_hero_image_mobile',
                    'label' => 'Imagem de fundo do hero na versão mobile',
                    'name'  => 'hero_background_image_mobile',
                    'type'  => 'image'
                ],

            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/home-hero',
                    ],
                ],
            ],
        ]);

        acf_register_block_type([
            'name'            => 'home-hero',
            'title'           => __('Hero da Home', 'sage'),
            'description'     => __('Um bloco do Hero da Hero.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'admin-post',
            'keywords'        => ['blog', 'lista', 'post', 'abrace a vida'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $hero_background_image = get_field('hero_background_image') ?: '';
        $hero_background_image_mobile = get_field('hero_background_image_mobile') ?: '';
    
        echo view('blocks.home-hero', [
            'block'                        => $block,
            'content'                      => $content,
            'is_preview'                   => $is_preview,
            'post_id'                      => $post_id,
            'hero_background_image'        => $hero_background_image,
            'hero_background_image_mobile' => $hero_background_image_mobile,
        ])->render();
    }
    
}