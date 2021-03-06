<?php
/**
 * Template Name: Default
 *
 */

if ($default_multiple_kb) {
    if(!empty($settings['selected_knowledge_base'])){
        $button_link = str_replace('%knowledge_base%', $settings['selected_knowledge_base'], get_term_link($term->slug, 'doc_category'));
    }else{
        $button_link = str_replace('%knowledge_base%', 'non-knowledgebase', get_term_link($term->slug, 'doc_category'));
    }
} else {
    $button_link = get_term_link($term->slug, 'doc_category');
}

echo '<a href="' . $button_link . '" class="el-betterdocs-category-box-post">
    <div class="el-betterdocs-cb-inner">';

    if ($settings['show_icon']) {
        $cat_icon_id = get_term_meta($term->term_id, 'doc_category_image-id', true);

        if ($cat_icon_id) {
            $cat_icon = wp_get_attachment_image($cat_icon_id, 'thumbnail', ['alt' => esc_attr(get_post_meta($cat_icon_id, '_wp_attachment_image_alt', true))]);
        } else {
            $cat_icon = '<img src="' . BETTERDOCS_ADMIN_URL . 'assets/img/betterdocs-cat-icon.svg" alt="betterdocs-category-box-icon">';
        }

        echo '<div class="el-betterdocs-cb-cat-icon">' . $cat_icon . '</div>';
    }

    if ($settings['show_title']) {
        echo '<' . $settings['title_tag'] . ' class="el-betterdocs-cb-cat-title">' . $term->name . '</' . $settings['title_tag'] . '>';
    }

    if ($settings['show_count']) {
        if(BetterDocs_Elementor::get_doc_post_count($term->count, $term->term_id) == 1) {
            printf('<div class="el-betterdocs-cb-cat-count"><span class="count-prefix">%s</span>%s<span class="count-suffix">%s</span></div>', $settings['count_prefix'], BetterDocs_Elementor::get_doc_post_count($term->count, $term->term_id), $settings['count_suffix_singular']);
        } else {
            printf('<div class="el-betterdocs-cb-cat-count"><span class="count-prefix">%s</span>%s<span class="count-suffix">%s</span></div>', $settings['count_prefix'], BetterDocs_Elementor::get_doc_post_count($term->count, $term->term_id), $settings['count_suffix']);
        }
        
    }

    echo '</div>
</a>';
