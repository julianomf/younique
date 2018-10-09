<li class="qodef-bl-item qodef-item-space clearfix">
	<div class="qodef-bli-inner">
		<?php if ( $post_info_image == 'yes' ) {
			eiddo_qodef_get_module_template_part( 'templates/parts/media', 'blog', '', $params );
		} ?>
        <div class="qodef-bli-content">
            <div class="qodef-bli-info">
                <?php
	                if ( $post_info_date == 'yes' ) {
		                eiddo_qodef_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
	                }
	                if ( $post_info_category == 'yes' ) {
		                eiddo_qodef_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
	                }
                ?>
            </div>
	
	        <?php eiddo_qodef_get_module_template_part( 'templates/parts/title', 'blog', '', $params ); ?>
	
	        <div class="qodef-bli-excerpt">
		        <?php eiddo_qodef_get_module_template_part( 'templates/parts/excerpt', 'blog', '', $params ); ?>
		        <?php eiddo_qodef_get_module_template_part( 'templates/parts/post-info/read-more', 'blog', '', $params ); ?>
	        </div>
	        <div class="qodef-bli-info-bottom">
		        <?php
			        if ( $post_info_author == 'yes' ) {
				        eiddo_qodef_get_module_template_part( 'templates/parts/post-info/author', 'blog', '', $params );
			        }
			        if ( $post_info_comments == 'yes' ) {
				        eiddo_qodef_get_module_template_part( 'templates/parts/post-info/comments', 'blog', '', $params );
			        }
			        if ( $post_info_like == 'yes' ) {
				        eiddo_qodef_get_module_template_part( 'templates/parts/post-info/like', 'blog', '', $params );
			        }
			        if ( $post_info_share == 'yes' ) {
				        eiddo_qodef_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
			        }
		        ?>
	        </div>
        </div>
	</div>
</li>