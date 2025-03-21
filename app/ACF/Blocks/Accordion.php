<?php
namespace App\ACF\Blocks;

use function Roots\bundle;
use function Roots\view;

class Accordion
{
    public static function register() 
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group([
            'key'    => 'group_accordion',
            'title'  => 'Acordeão',
            'fields' => [
                [
                    'key'   => 'field_accordion_title',
                    'label' => 'Título do accordion',
                    'name'  => 'accordion_title',
                    'type'  => 'text'
                ],
                [
                    'key'   => 'field_accordion_subtitle',
                    'label' => 'Subtítulo do Accordion',
                    'name'  => 'accordion_subtitle',
                    'type'  => 'wysiwyg',
                    'tabs'  => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                ],
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/post-accordion',
                    ],
                ],
            ],
        ]);

        acf_register_block_type([
            'name'            => 'post-accordion',
            'title'           => __('Acordeão', 'sage'),
            'description'     => __('Um bloco que renderiza um acordeão.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'admin-post',
            'keywords'        => ['list', 'listagem', 'post', 'blog'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $accordion_title = get_field('accordion_title');
        $accordion_subtitle = get_field('accordion_subtitle');

        echo view('blocks.accordion', [
            'block'         => $block,
            'content'       => $content,
            'is_preview'    => $is_preview,
            'post_id'       => $post_id,
            'accordion_title'     => $accordion_title,
            'accordion_subtitle'  => $accordion_subtitle,
        ])->render();
    }
}
