<?php
namespace App\ACF\Blocks;
use function Roots\bundle;
use function Roots\view;
class Faq
{
    public static function register() 
    {
        if (!function_exists('acf_register_block_type') || !function_exists('acf_add_local_field_group')) {
            return;
        }
        acf_add_local_field_group([
            'key'    => 'group_faq',
            'title'  => 'FAQ',
            'fields' => [
                [
                    'key'   => 'field_faq_title',
                    'label' => 'Título do FAQ',
                    'name'  => 'faq_title',
                    'type'  => 'text'
                ],
                [
                    'key'   => 'field_faq_repeater',
                    'label' => 'Perguntas e Respostas',
                    'name'  => 'faq_items',
                    'type'  => 'repeater',
                    'button_label' => 'Adicionar Pergunta',
                    'collapsed' => 'field_faq_question',  
                    'sub_fields' => [
                        [
                            'key'   => 'field_faq_question',
                            'label' => 'Pergunta',
                            'name'  => 'question',
                            'type'  => 'text'
                        ],
                        [
                            'key'   => 'field_faq_answer',
                            'label' => 'Resposta',
                            'name'  => 'answer',
                            'type'  => 'wysiwyg',  
                            'tabs'  => 'all', 
                            'toolbar' => 'full',  
                            'media_upload' => 1,  
                        ], 
                        
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => 'acf/faq',
                    ],
                ],
            ],
        ]);
        acf_register_block_type([
            'name'            => 'faq',
            'title'           => __('FAQ', 'sage'),
            'description'     => __('Um bloco de FAQ.', 'sage'),
            'render_callback' => [self::class, 'render'],
            'icon'            => 'admin-post',
            'keywords'        => ['faq', 'pergunta', 'fique-vacinado'],
        ]);
    }
    public static function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $faq_title = get_field('faq_title');
        $faq_items = get_field('faq_items') ?: [];
        echo view('blocks.faq', [
            'block'      => $block,
            'content'    => $content,
            'is_preview' => $is_preview,
            'post_id'    => $post_id,
            'faq_title'  => $faq_title,
            'faq_items'  => $faq_items,
        ])->render();
    }
}