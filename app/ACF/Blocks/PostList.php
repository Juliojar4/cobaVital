<?php

namespace App\ACF\Blocks;

use function Roots\view;

class PostList
{
    public static function register()
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }

 
        acf_add_local_field_group([
            'key'    => 'group_post_list',
            'title'  => 'Listagem de post',
            'fields' => [
                [
                    'key'   => 'field_title_post_list',
                    'label' => 'Titulo da listagem dos posts',
                    'name'  => 'post_list',
                    'type'  => 'text',
                ],
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/post-list',
                    ],
                ],
            ],
        ]);

        // Registrar o bloco
        acf_register_block_type([
            'name'            => 'post-list',
            'title'           => __('Listagem de Posts', 'sage'),
            'description'     => __('Bloco para exibir um slider de imagens.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'images-alt2',
            'keywords'        => ['slider', 'imagens', 'carrossel'],
        ]);
    }

    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
    

        echo view('blocks.post-list', [
            'block'   => $block,
            'is_preview' => $is_preview,
            'post_id' => $post_id,
        ])->render();
    }
}
