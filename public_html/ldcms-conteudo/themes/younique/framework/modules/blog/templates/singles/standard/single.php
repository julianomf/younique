<?php

eiddo_qodef_get_single_post_format_html($blog_single_type);

do_action('eiddo_qodef_after_article_content');

eiddo_qodef_get_module_template_part('templates/parts/single/single-navigation', 'blog');

eiddo_qodef_get_module_template_part('templates/parts/single/author-info', 'blog');

eiddo_qodef_get_module_template_part('templates/parts/single/related-posts', 'blog', '', $single_info_params);

eiddo_qodef_get_module_template_part('templates/parts/single/comments', 'blog');