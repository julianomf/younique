<div class="qodef-re-admin-most-favorite">
    <h1 class="wp-heading-inline"><?php esc_html_e('Users most favorite', 'select-real-estate') ?></h1>
    <table class="qodef-re-most-favorite wp-list-table widefat fixed striped posts">
        <thead>
        <tr>
            <td>
                <?php esc_html_e('ID de identificação', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Title', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Image', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('City', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Status', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Type', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Price', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Favorites', 'select-real-estate') ?>
            </td>
            <td>
                <?php esc_html_e('Actions', 'select-real-estate') ?>
            </td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($posts)) { ?>
        <?php foreach($posts as $post) { ?>
            <tr class="iedit author-self level-0 most-favorite hentry">
                <td>
                    <?php echo esc_html($post['propertyID']) ?>
                </td>
                <td>
                    <?php echo esc_html($post['title']) ?>
                </td>
                <td>
                    <?php print $post['image']; ?>
                </td>
                <td>
                    <?php echo esc_html($post['city']) ?>
                </td>
                <td>
                    <?php echo esc_html($post['status']) ?>
                </td>
                <td>
                    <?php echo esc_html($post['type']) ?>
                </td>
                <td>
                    <?php echo esc_html($post['price']) ?>
                </td>
                <td>
                    <?php echo esc_html($post['favorites']) ?>
                </td>
                <td>
                    <a href="<?php echo esc_url($post['view_link']) ?>" target="_blank">
                        <i class="dashicons-before dashicons-admin-links"></i>
                    </a>
                    <a href="<?php echo esc_url($post['edit_link']) ?>" target="_blank">
                        <i class="dashicons-before dashicons-edit"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>
</div>