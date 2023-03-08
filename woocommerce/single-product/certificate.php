<?php 
$certificate = get_field('file_certificates');

if ( $certificate ) : 
    $title_certificates = get_field('title_certificates');
    $preview = ($certificate['mime_type'] == 'image/jpeg') ? $certificate['sizes']['medium'] : $certificate['icon'];
?>
    <div class="litebox_block white_block">
        
        <?php if ( $title_certificates ) : ?>
            <h5>
                <?php echo esc_html($title_certificates); ?>
            </h5>
        <?php endif; ?>

        <div class="litebox_block_content ">
            <a href="<?php echo esc_url($certificate['url']); ?>" data-fancybox="certs" target="_blank">
                <img src="<?php echo esc_attr($preview); ?>" alt="" >
            </a>
        </div> 
    </div>
<?php endif; ?>