</main>

<div class="form-popup">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/close.svg" alt="" class="form-close">

    <div class="form-container">
        <div class="form-popup-grid">
            <div class="col-left">
                <h2 class="form-title s-title">Let’s Talk</h2>

                <div class="form-text">
                    <p>Tell us about yourself and your business in more detail by filling out the form below.</p>
                </div>

            </div>
            <div class="col-right">
                <form action="" class="popup-form" method="POST">
                    <div class="form-item">
                        <h5 class="popup-form-title">
                            What are you looking for?
                        </h5>
                        <div class="checkbox-set" id="direction">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Branding" id="checkbox-branding" value="Yes">
                                <label for="checkbox-branding">Branding</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="checkbox" name="Product" id="checkbox-product" value="Yes">
                                <label for="checkbox-product">Product</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="checkbox" name="Website" id="checkbox-website" value="Yes">
                                <label for="checkbox-website">Website</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="checkbox" name="Illustration" id="checkbox-illustration" value="Yes">
                                <label for="checkbox-illustration">Illustration</label>
                            </div>


                        </div>
                        <span class="empty-field direction">Please select at least one option</span>
                    </div>

                    <div class="form-item">
                        <h5 class="popup-form-title">
                            What’s your budget?
                        </h5>
                        <div class="checkbox-set" id="budjet">

                            <div class="checkbox-item">
                                <input type="radio" name="Budjet" id="radio-5-10" value="5-10">
                                <label for="radio-5-10">5-10k</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="radio" name="Budjet" id="radio-10-20" value="10-20">
                                <label for="radio-10-20">10-20k</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="radio" name="Budjet" id="radio-20-50" value="20-50">
                                <label for="radio-20-50">20-50k</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="radio" name="Budjet" id="radio-50" value="50+">
                                <label for="radio-50">50k+</label>
                            </div>


                        </div>
                        <span class="empty-field budjet">Please select at least one option</span>

                    </div>

                    <div class="form-item">
                        <div class="input-set">
                            <div class="input-item">
                                <h5 class="popup-form-title input-label">
                                    Name
                                </h5>
                                <input type="text" placeholder="John" name="Name" autocomplete="on" id="user_name">
                                <span class="empty-field name">Please enter your name</span>
                            </div>
                            <div class="input-item">
                                <h5 class="popup-form-title input-label">
                                    Email
                                </h5>
                                <input type="email" placeholder="takemymoney@address.com" name="Email" id="user_email">
                                <span class="empty-field email">Please enter your e-mail</span>
                            </div>
                            <div class="input-item">
                                <h5 class="popup-form-title input-label">
                                    Project details (optional)
                                </h5>
                                <textarea name="Comment" id="" cols="30" rows="5"
                                    placeholder="We’re excited to hear you’ve got in mind!"></textarea>
                            </div>


                        </div>
                    </div>

                    <div class="form-attach">

                        <input type="file" name="Attach" id="form-file">
                        <label for="form-file" class="form-file-label">
                            Attach file
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/attach.svg" alt="">
                        </label>
                        <div class="file-name"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/doc.svg"
                                alt=""><span>Brif.doc</span></div>
                    </div>
                    <button class="submit-form-btn">
                        Submit
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_submit.svg" alt="">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="thanks-popup">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/close.svg" alt="" class="thanks-popup-close">
    <div class="form-container">
        <div class="form-popup-grid">
            <div class="col-left">
                <h2 class="thanks-title s-title">Thank You!</h2>

                <div class="thanks-text">
                    <p>Jordan will get back you shortly. Meanwhile check out our last <a href="#"
                            class="link-thanks-page">case study</a></p>
                </div>

            </div>
            <div class="col-right">
                <div class="thanks-video"></div>
            </div>

        </div>

    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <h2 class="footer-title s-title">
                Confirm you <br>are a human <br>&
                <span class="call-form-btn">
                    <span class="call-form-btn-line"></span>
                    <span class="call-form-btn-text">say hello</span>
                </span>
            </h2>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow_footer_short.svg" alt=""
                class="footer-arrow">
        </div>
        <div class="basement">
            <div class="basement-line">
            </div>
            <div class="basement-links">
                <p>© <?php echo date ( 'Y' ); ?> Oddbee Inc. <a href="<?php echo site_url('/privacy-policy') ?>" target="_blank" class="white-link">Privacy
                        Policy</a></p>

                <?php
                $s_footer = get_field('footer',7);
                ?>
                <p>Contact Us:<br> <a href="mailto:<?php echo $s_footer['email']; ?>"
                        class="white-link"><?php echo $s_footer['email']; ?>
                    </a><span>&#160;&#160;/&#160;&#160;</span><br><a href="tel:<?php echo $s_footer['phone']; ?>"
                        class="white-link"><?php echo $s_footer['phone']; ?></a></p>
            </div>


            <div class="basement-social">
                <a href="<?php echo $s_footer['socials']['instagram']; ?>" target="_blank">
                    <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>instagram-sketched</title>
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="footer-56" transform="translate(-1194.000000, -348.000000)" fill="#FFFFFF"
                                fill-rule="nonzero">
                                <g id="instagram-sketched" transform="translate(1194.017513, 348.000000)">
                                    <path
                                        d="M19.9025341,5.87890625 C19.8557809,4.81643676 19.6843019,4.08599852 19.4386574,3.45306398 C19.1852461,2.78121949 18.7953825,2.17971801 18.2846004,1.6796875 C17.7855446,1.171875 17.1812561,0.777282734 16.5184881,0.52734375 C15.8831323,0.281219492 15.1579252,0.109405508 14.0975268,0.0625610156 C13.0292093,0.0117492578 12.6900585,0 9.98050682,0 C7.27095517,0 6.93180433,0.0117492578 5.86744639,0.05859375 C4.80704799,0.105438242 4.07803361,0.277404766 3.44648511,0.523376484 C2.77579801,0.777282734 2.17546904,1.16790773 1.67641326,1.6796875 C1.16959064,2.17971801 0.775919805,2.78518676 0.526315789,3.44924926 C0.280671306,4.08599852 0.109192242,4.81246949 0.0624390643,5.87493898 C0.0117263548,6.94534301 0,7.28515625 0,10 C0,12.7148438 0.0117263548,13.054657 0.0584795322,14.1210938 C0.10523271,15.1835632 0.276864016,15.9140015 0.522508499,16.546936 C0.775919805,17.2187805 1.16959064,17.820282 1.67641326,18.3203125 C2.17546904,18.828125 2.77975754,19.2227173 3.44252558,19.4726562 C4.07803361,19.7187805 4.80308846,19.8905945 5.8636391,19.937439 C6.9278448,19.984436 7.26714788,19.9960327 9.97669953,19.9960327 C12.6862512,19.9960327 13.025402,19.984436 14.08976,19.937439 C15.1501584,19.8905945 15.8791727,19.7187805 16.5107212,19.4726562 C17.8519432,18.9530945 18.9123416,17.890625 19.4308906,16.546936 C19.6763828,15.9101868 19.8480141,15.1835632 19.8947673,14.1210938 C19.9415205,13.054657 19.9532468,12.7148438 19.9532468,10 C19.9532468,7.28515625 19.9492873,6.94534301 19.9025341,5.87890625 Z M18.1053545,14.0429687 C18.0624086,15.0195312 17.8986964,15.546875 17.7622441,15.8984375 C17.4269006,16.7695618 16.7368726,17.4609375 15.8674464,17.796936 C15.5165692,17.9336548 14.9864461,18.0976868 14.0155945,18.140564 C12.962963,18.187561 12.6472648,18.1991577 9.98446635,18.1991577 C7.32166788,18.1991577 7.00201021,18.187561 5.95318593,18.140564 C4.97852706,18.0976868 4.45221127,17.9336548 4.10133407,17.796936 C3.66867688,17.6367187 3.2748538,17.3828125 2.95519614,17.0507812 C2.62381212,16.726532 2.37040082,16.335907 2.21049587,15.9024048 C2.07404363,15.5508423 1.91033138,15.0195312 1.86753774,14.046936 C1.82063232,12.9922485 1.80905821,12.6757812 1.80905821,10.007782 C1.80905821,7.33978273 1.82063232,7.01950074 1.86753774,5.96878051 C1.91033138,4.99221801 2.07404363,4.46487426 2.21049587,4.11331176 C2.37040082,3.67965699 2.62381212,3.28521727 2.95915567,2.96478273 C3.28262062,2.63275148 3.67248417,2.37884523 4.10529361,2.21878051 C4.4561708,2.08206176 4.98644612,1.91802977 5.95714546,1.875 C7.00977704,1.82815551 7.32562741,1.81640625 9.98827365,1.81640625 C12.6550317,1.81640625 12.9707298,1.82815551 14.0195541,1.875 C14.9942129,1.91802977 15.5205287,2.08206176 15.8714059,2.21878051 C16.3040631,2.37884523 16.6978862,2.63275148 17.0175439,2.96478273 C17.3489279,3.28903199 17.6023392,3.67965699 17.7622441,4.11331176 C17.8986964,4.46487426 18.0624086,4.99603273 18.1053545,5.96878051 C18.1521077,7.02346801 18.163834,7.33978273 18.163834,10.007782 C18.163834,12.6757812 18.1521077,12.9882812 18.1053545,14.0429687 Z"
                                        id="Shape"></path>
                                    <path
                                        d="M9.98050682,4.86328125 C7.15018881,4.86328125 4.85380117,7.16400148 4.85380117,10 C4.85380117,12.8359985 7.15018881,15.1367188 9.98050682,15.1367188 C12.8109771,15.1367188 15.1072125,12.8359985 15.1072125,10 C15.1072125,7.16400148 12.8109771,4.86328125 9.98050682,4.86328125 Z M9.98050682,13.3320618 C8.14434086,13.3320618 6.65494031,11.8399048 6.65494031,10 C6.65494031,8.16009523 8.14434086,6.66793824 9.98050682,6.66793824 C11.816825,6.66793824 13.3060733,8.16009523 13.3060733,10 C13.3060733,11.8399048 11.816825,13.3320618 9.98050682,13.3320618 L9.98050682,13.3320618 Z"
                                        id="Shape"></path>
                                    <path
                                        d="M16.506914,4.66018676 C16.506914,5.3224182 15.9710039,5.859375 15.3099111,5.859375 C14.6489705,5.859375 14.1130604,5.3224182 14.1130604,4.66018676 C14.1130604,3.99780273 14.6489705,3.46099852 15.3099111,3.46099852 C15.9710039,3.46099852 16.506914,3.99780273 16.506914,4.66018676 L16.506914,4.66018676 Z"
                                        id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="<?php echo $s_footer['socials']['facebook']; ?>" target="_blank" rel="noopener noreferrer">
                    <svg width="12px" height="20px" viewBox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>facebook-logo</title>
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="footer-56" transform="translate(-1271.000000, -348.000000)" fill="#FFFFFF">
                                <g id="Group-2" transform="translate(1194.017513, 348.000000)">
                                    <g id="facebook-logo" transform="translate(76.982487, 0.000000)">
                                        <path
                                            d="M10.8440103,0.00412371134 L8.14540206,0 C5.11360825,0 3.1543299,1.91443299 3.1543299,4.87752577 L3.1543299,7.12639175 L0.441,7.12639175 C0.206536082,7.12639175 0.0166701031,7.30742268 0.0166701031,7.53072165 L0.0166701031,10.7890722 C0.0166701031,11.0123711 0.206752577,11.1931959 0.441,11.1931959 L3.1543299,11.1931959 L3.1543299,19.4150515 C3.1543299,19.6383505 3.34419588,19.8191753 3.57865979,19.8191753 L7.11878351,19.8191753 C7.35324742,19.8191753 7.5431134,19.6381443 7.5431134,19.4150515 L7.5431134,11.1931959 L10.7156289,11.1931959 C10.9500928,11.1931959 11.1399588,11.0123711 11.1399588,10.7890722 L11.1412577,7.53072165 C11.1412577,7.42350515 11.0964433,7.32082474 11.0169897,7.24494845 C10.9375361,7.16907216 10.8292887,7.12639175 10.7167113,7.12639175 L7.5431134,7.12639175 L7.5431134,5.22 C7.5431134,4.30371134 7.77238144,3.8385567 9.0256701,3.8385567 L10.8435773,3.83793814 C11.0778247,3.83793814 11.2676907,3.65690722 11.2676907,3.43381443 L11.2676907,0.408247423 C11.2676907,0.185360825 11.0780412,0.00453608247 10.8440103,0.00412371134 Z"
                                            id="Path"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="<?php echo $s_footer['socials']['in']; ?>" target="_blank" rel="noopener noreferrer">
                    <svg width="22px" height="20px" viewBox="0 0 22 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>linkedin-logo</title>
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="footer-56" transform="translate(-1338.000000, -348.000000)" fill="#FFFFFF"
                                fill-rule="nonzero">
                                <g id="Group-2" transform="translate(1194.017513, 348.000000)">
                                    <g id="linkedin-logo" transform="translate(143.982487, 0.000000)">
                                        <path
                                            d="M21.4362518,12.2593689 L21.4362518,19.9786408 L16.8417689,19.9786408 L16.8417689,12.7763592 C16.8417689,10.9670874 16.1772265,9.7323301 14.5141761,9.7323301 C13.2446479,9.7323301 12.4891508,10.564466 12.1567799,11.3694175 C12.0355735,11.6571845 12.0043748,12.0577184 12.0043748,12.460534 L12.0043748,19.9786408 L7.40834693,19.9786408 C7.40834693,19.9786408 7.47024595,7.78033981 7.40834693,6.51650485 L12.0039262,6.51650485 L12.0039262,8.42470874 C11.9946065,8.43898058 11.9824958,8.45436893 11.9737243,8.46820388 L12.0039262,8.46820388 L12.0039262,8.42470874 C12.6144939,7.50873786 13.7049036,6.20024272 16.1455793,6.20024272 C19.1694117,6.20024272 21.4362518,8.12432039 21.4362518,12.2593689 Z M2.60070615,0.0270873786 C1.028411,0.0270873786 0,1.03160194 0,2.35257282 C0,3.64475728 0.998657605,4.67975728 2.53970421,4.67975728 L2.57040453,4.67975728 C4.17315081,4.67975728 5.16991456,3.64495146 5.16991456,2.35257282 C5.13971262,1.03160194 4.17315081,0.0270873786 2.60070615,0.0270873786 Z M0.272963754,19.9786408 L4.86724725,19.9786408 L4.86724725,6.51650485 L0.272963754,6.51650485 L0.272963754,19.9786408 Z"
                                            id="LinkedIn"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer() ?>

</body>

</html>