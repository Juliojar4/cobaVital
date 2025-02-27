<?php
namespace App\ACF\Blocks;

use function Roots\bundle;
use function Roots\view;

class LargeIconBoxHome
{
    public static function register() 
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }
        acf_add_local_field_group([
            'key'    => 'group_icon_box_home',
            'title'  => 'Icone e Texto (L)',
            'fields' => [
                [
                    'key'   => 'field_icon_box_text',
                    'label' => 'Texto',
                    'name'  => 'icon_box_text',
                    'type'  => 'text'
                ],
                [
                    'key'    => 'field_icon_box_image',
                    'label'  => 'Ícone',
                    'name'   => 'icon_box_image',
                    'type'   => 'image',
                    'return' => 'id',
                ],
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/large-icon-box-home',
                    ],
                ],
            ],
        ]);

        acf_register_block_type([
            'name'            => 'large-icon-box-home',
            'title'           => __('Icone e Texto (L)', 'sage'),
            'description'     => __('Widget de icone e texto.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'admin-post',
            'keywords'        => ['icone', 'caixa', 'texto', 'home', 'cobavital'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $field_icon_box_text = get_field('field_icon_box_text') ?: '';
        $field_icon_box_image = get_field('field_icon_box_image') ?: '';
    
        echo view('blocks.large-icon-box-home', [
            'block'                        => $block,
            'content'                      => $content,
            'is_preview'                   => $is_preview,
            'post_id'                      => $post_id,
            'field_icon_box_text'          => $field_icon_box_text,
            'field_icon_box_image'         => $field_icon_box_image,
        ])->render();
    }
    
}