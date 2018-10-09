<?php
$multi_units_meta = get_post_meta(get_the_ID(), 'qodef_multi_units_meta', true);

if(is_array($multi_units_meta) && count($multi_units_meta)) {
?>
<div class="qodef-property-multi-unit qodef-property-label-items-holder">
    <div class="qodef-property-multi-unit-label qodef-property-label-style">
        <h5>
            <?php esc_html_e('Multi Units', 'select-real-estate'); ?>
        </h5>
    </div>
    <div class="qodef-property-multi-unit-items qodef-property-items-style clearfix">
        <table>
            <thead>
                <tr>
                    <td><?php esc_html_e('Title', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Type', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Price', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Quartos', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Bathrooms', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Size', 'select-real-estate'); ?></td>
                    <td><?php esc_html_e('Available', 'select-real-estate'); ?></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($multi_units_meta as $multi_unit) { ?>
                    <tr>
                        <td>
                            <?php echo esc_html($multi_unit['title']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['type']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['price']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['bedrooms']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['bedrooms']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['bathrooms']);?>
                        </td>
                        <td>
                            <?php echo esc_html($multi_unit['size']);?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>