<?php 
global $product;
?>

<div class="curs_page_sidebar_soc">
    <div class="white_block">
        <div class="white_block_title">Поделиться курсом с друзьями</div>

        <div class="soc">
            <a href="https://t.me/share/url?url=<?php echo esc_attr($product->get_permalink()); ?>&text=<?php echo esc_attr($product->get_name()); ?>" target="_blank" title="Share in Telegram">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_331_1534)">
                        <rect width="40" height="40" rx="3" fill="#4967D0"></rect>
                        <path d="M8.3237 19.8265C8.3237 19.8265 18.3237 15.7225 21.7919 14.2774C23.1214 13.6994 27.63 11.8496 27.63 11.8496C27.63 11.8496 29.711 11.0404 29.5375 13.0057C29.4797 13.815 29.0173 16.6473 28.5549 19.7109C27.8612 24.0462 27.1098 28.786 27.1098 28.786C27.1098 28.786 26.9942 30.1155 26.0115 30.3467C25.0289 30.5779 23.4103 29.5375 23.1214 29.3062C22.8901 29.1329 18.7861 26.5317 17.2832 25.26C16.8786 24.9132 16.4162 24.2196 17.341 23.4103C19.4219 21.5028 21.9075 19.1329 23.4103 17.63C24.104 16.9363 24.7976 15.3178 21.9075 17.2831C17.8035 20.1155 13.7572 22.7745 13.7572 22.7745C13.7572 22.7745 12.8323 23.3525 11.0983 22.8322C9.3641 22.3121 7.34098 21.6184 7.34098 21.6184C7.34098 21.6184 5.95378 20.7514 8.3237 19.8265Z" fill="white"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_331_1534">
                            <rect width="40" height="40" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg> 
            </a>
            <a href="http://vkontakte.ru/share.php?url=<?php echo esc_attr($product->get_permalink()); ?>" target="_blank" title="Share in VK">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="3" fill="#4967D0"></rect>
                    <path d="M20.9824 27C13.4659 27 9.17864 21.7447 9 13H12.7651C12.8888 19.4184 15.6645 22.1371 17.8631 22.6977V13H21.4086V18.5355C23.5797 18.2973 25.8605 15.7748 26.63 13H30.1754C29.5845 16.4194 27.111 18.9419 25.3521 19.979C27.111 20.8198 29.9282 23.02 31 27H27.0973C26.2591 24.3373 24.1706 22.2773 21.4086 21.997V27H20.9824Z" fill="white"></path>
                </svg> 
            </a>
            <a href="https://api.whatsapp.com/send?text=<?php echo $title; ?>%0A<?php echo esc_attr($product->get_permalink()); ?>" target="_blank" title="Share in WhatsApp">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="3" fill="#4967D0"></rect>
                    <path d="M27.9268 12.0625C25.9512 10.0937 23.3171 9 20.5366 9C14.7561 9 10.0732 13.6667 10.0732 19.4271C10.0732 21.25 10.5854 23.0729 11.4634 24.6042L10 30L15.561 28.5417C17.0976 29.3438 18.7805 29.7812 20.5366 29.7812C26.3171 29.7812 31 25.1146 31 19.3542C30.9268 16.6563 29.9024 14.0312 27.9268 12.0625ZM25.5854 23.1458C25.3659 23.7292 24.3415 24.3125 23.8293 24.3854C23.3902 24.4583 22.8049 24.4583 22.2195 24.3125C21.8537 24.1667 21.3415 24.0208 20.7561 23.7292C18.122 22.6354 16.439 20.0104 16.2927 19.7917C16.1463 19.6458 15.1951 18.4062 15.1951 17.0937C15.1951 15.7812 15.8537 15.1979 16.0732 14.9062C16.2927 14.6146 16.5854 14.6146 16.8049 14.6146C16.9512 14.6146 17.1707 14.6146 17.3171 14.6146C17.4634 14.6146 17.6829 14.5417 17.9024 15.0521C18.122 15.5625 18.6341 16.875 18.7073 16.9479C18.7805 17.0938 18.7805 17.2396 18.7073 17.3854C18.6341 17.5312 18.561 17.6771 18.4146 17.8229C18.2683 17.9687 18.1219 18.1875 18.0488 18.2604C17.9024 18.4062 17.7561 18.5521 17.9024 18.7708C18.0488 19.0625 18.561 19.8646 19.3659 20.5937C20.3902 21.4687 21.1951 21.7604 21.4878 21.9063C21.7805 22.0521 21.9268 21.9792 22.0732 21.8333C22.2195 21.6875 22.7317 21.1042 22.878 20.8125C23.0244 20.5208 23.2439 20.5938 23.4634 20.6667C23.6829 20.7396 25 21.3958 25.2195 21.5417C25.5122 21.6875 25.6585 21.7604 25.7317 21.8333C25.8049 22.0521 25.8049 22.5625 25.5854 23.1458Z" fill="white"></path>
                </svg> 
            </a> 
        </div>

        <?php if ($args['link']) : ?>
            <div class="brand_link"> 
                <div class="brand_link_a">
                    <span class="text" id="sample"><?php echo esc_url($args['link']); ?></span> 
                    <a href="#" onclick="CopyToClipboard('sample');return false;">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_269_2403)">
                                <path d="M16.6667 7.5H9.16667C8.24619 7.5 7.5 8.24619 7.5 9.16667V16.6667C7.5 17.5871 8.24619 18.3333 9.16667 18.3333H16.6667C17.5871 18.3333 18.3333 17.5871 18.3333 16.6667V9.16667C18.3333 8.24619 17.5871 7.5 16.6667 7.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.16699 12.4998H3.33366C2.89163 12.4998 2.46771 12.3242 2.15515 12.0117C1.84259 11.6991 1.66699 11.2752 1.66699 10.8332V3.33317C1.66699 2.89114 1.84259 2.46722 2.15515 2.15466C2.46771 1.8421 2.89163 1.6665 3.33366 1.6665H10.8337C11.2757 1.6665 11.6996 1.8421 12.0122 2.15466C12.3247 2.46722 12.5003 2.89114 12.5003 3.33317V4.1665" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_269_2403">
                                    <rect width="20" height="20" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg> 
                    </a> 
                    <script>
                        function CopyToClipboard(id) {
                            var r = document.createRange();
                            r.selectNode(document.getElementById(id));
                            window.getSelection().removeAllRanges();
                            window.getSelection().addRange(r);
                            document.execCommand('copy');
                            window.getSelection().removeAllRanges();
                        }
                    </script>  
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>