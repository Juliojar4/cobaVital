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
                    'key'   => 'field_image_repeater',
                    'label' => 'Imagens e Links',
                    'name'  => 'image_repeater',
                    'type'  => 'repeater',
                    'layout' => 'table',
                    'sub_fields' => [
                        [
                            'key'   => 'field_slider_image',
                            'label' => 'Imagem',
                            'name'  => 'slider_image',
                            'type'  => 'image',
                            'return_format' => 'id',
                        ],
                        [
                            'key'   => 'field_slider_link',
                            'label' => 'Link',
                            'name'  => 'slider_link',
                            'type'  => 'url',
                        ],
                    ],
                    'min' => 1, // Pelo menos uma imagem precisa ser adicionada
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
            'description'     => __('Bloco para exibir um slider de imagens com links.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'images-alt2',
            'keywords'        => ['slider', 'imagens', 'carrossel'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $images = get_field('image_repeater') ?: [];

        echo view('blocks.image-slider', [
            'block'   => $block,
            'images'  => $images,
            'is_preview' => $is_preview,
            'post_id' => $post_id,
        ])->render();
    }
}
