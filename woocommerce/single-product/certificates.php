<?php 
$certificates = $args['certificates'];

if ( $certificates ) : 
?>
    <div class="litebox_block white_block">
        
        <?php if ( $title_certificates ) : ?>
            <h5>
                <?php echo esc_html($title_certificates); ?>
            </h5>
        <?php endif; ?>

        <div class="litebox_block_content ">

            <?php foreach ( $certificates as $certificate ) : ?>

                <?php 
                if ( $certificate['file_certificates'] ) : 
                    $file = $certificate['file_certificates'];
                    if ( $file['mime_type'] == 'image/jpeg' ) { 
                        $preview = $file['sizes']['medium'];
                    } else {
                        $preview = $file['icon'];
                    }
                ?>
                    <a href="<?php echo esc_url($file['url']); ?>" data-fancybox="certs" target="_blank">
                        <img src="<?php echo esc_attr($preview); ?>" alt="" >
                    </a>
                <?php endif; ?>

            <?php endforeach; ?> 

        </div> 
    </div>
<?php endif; ?>