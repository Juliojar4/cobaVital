<?php

namespace App\ACF\Blocks;

use function Roots\view;

class ImageSliderBlock
{
    public static function register()
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }

        // Registrar os campos ACF
        acf_add_local_field_group([
            'key'    => 'group_image_slider',
            'title'  => 'Slider de Imagens',
            'fields' => [
                [
                    'key'   => 'field_image_gallery',
                    'label' => 'Galeria de Imagens',
                    'name'  => 'image_gallery',
                    'type'  => 'gallery',
                    'return_format' => 'id',
                ],
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/image-slider',
                    ],
                ],
            ],
        ]);

        // Registrar o bloco
        acf_register_block_type([
            'name'            => 'image-slider',
            'title'           => __('Slider de Imagens', 'sage'),
            'description'     => __('Bloco para exibir um slider de imagens.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'images-alt2',
            'keywords'        => ['slider', 'imagens', 'carrossel'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $images = get_field('image_gallery') ?: [];

        echo view('blocks.image-slider', [
            'block'   => $block,
            'images'  => $images,
            'is_preview' => $is_preview,
            'post_id' => $post_id,
        ])->render();
    }
}
