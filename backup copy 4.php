<?php /* Template Name: Главная */ get_header(); ?>
    <div id="page">
        <div class="bg_1">
            <header>
                <div class="wrap">
                    <div class="head_top">
                        <div class="left">
                            <div class="phone"><a href="tel:<?php the_field('телефон'); ?>"><?php the_field('телефон'); ?></a></div>
                            <div class="time"><?php the_field('время_работы'); ?></div>
                            <div class="whatsapp"><a href="<?php the_field('whatsapp'); ?>">Написать в Whatsapp</a></div>
                        </div>
                        <div class="slogan"><?php the_field('слоган'); ?></div>
                    </div>
                    <div class="head_bottom">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></div>
                        <div class="phone none"><a href="tel:<?php the_field('телефон'); ?>"><?php the_field('телефон'); ?></a></div>
                        <div class="menu_main landingMenu">
                            <ul>
                                <li><a href="#products">Товары и цены</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="#develiry">Доставка и оплата</a></li>
                                <li><a href="#contacts">Где мы находимся</a></li>
                            </ul>
                        </div>
                        <div class="open_menu"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt=""></div>
                    </div>
                </div>
            </header>
            <div class="first_screen">
                <div class="vert_center">
                    <div class="wrap">
                        <div class="feed_back">
                            <div class="name">Оформление похоронных венков под заказ</div>
                            <div class="txt">
                                <p>Мы предлагаем акцию на букеты каждому клиенту и бесплатную доставку в пределах региона</p>
                            </div>
                            <?php echo do_shortcode( '[contact-form-7 id="5" title="Форма 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advanced">
            <div class="wrap">
                <div class="advanced_row">
                    <div class="advanced_post">
                        <div class="sub_title"><?php the_field('a_1'); ?></div>
                        <div class="text">
                            <?php the_field('a_2'); ?>
                        </div>
                    </div>
                    <div class="right_info shadow_right">
                        <div class="inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_2.jpg)">
                            <?php the_field('a_3'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products landingItem" id="products">
            <div class="wrap">
                <div class="sub_title">Наши товары</div>
                <div class="list">
                    <?php if(get_field('list_1')): ?>
                    <?php while(has_sub_field('list_1')): $count ?>
                    <div class="item sh count_<?php echo $count ?>">
                        <div class="title"><?php the_sub_field('название'); ?></div>
                        <div class="thumb">
                            <div class="image">
                                <?php 
                                $images = get_sub_field('изображения');
                                if( $images ): ?>
                                    <?php $i = 0; ?>
                                    <?php foreach( $images as $image ): ?>
                                        <?php if ($i === 0) { ?>
                                        <a href="<?php echo esc_url($image['url']); ?>">
                                             <img src="<?php echo esc_url($image['sizes']['thumb_1']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                        <?php } ++$i; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="dot">
                                <?php 
                                $images = get_sub_field('изображения');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <a href="<?php echo esc_url($image['url']); ?>">
                                             <img src="<?php echo esc_url($image['sizes']['thumb_2']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="info">
                            <div class="price">
                                <p><?php the_sub_field('цена'); ?></p>
                                <p><small>цена за товар*</small></p>
                            </div>
                            <div class="button"><span class="btn">Заказать</span></div>
                        </div>
                        <div class="show_price"><span>смотреть цены &rarr;</span></div>
                        <div class="order">
                            <div class="order_inner">
                                <div class="order_box">
                                    <div class="name">Форма заказа</div>
                                    <?php echo do_shortcode( '[contact-form-7 id="116" title="Форма заказа"]' ); ?>
                                    <div class="close">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="prize">
            <div class="wrap">
                <div class="prize_row">
                    <div class="left_info shadow_center">
                        <div class="inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_4.jpg)">
                            <div class="txt">
                                <?php if(get_field('d_3')): ?>
                                <?php while(has_sub_field('d_3')): ?>
                                <dl>
                                    <dt><?php the_sub_field('название'); ?></dt>
                                    <dd><?php the_sub_field('текст'); ?></dd>
                                </dl>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="prize_post">
                        <div class="sub_title"><?php the_field('d_1'); ?></div>
                        <div class="text">
                            <?php the_field('d_2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_price">
            <div class="wrap">
                <div class="sub_title">Расценки</div>
                <div class="price_list">
                    <?php if(get_field('list_2')): ?>
                    <?php while(has_sub_field('list_2')): ?>
                    <div class="item_price sh">
                        <div class="thumb">
                           <?php
                            $image = get_sub_field('изображения');
                            if( $image ):

                                $url = $image['url'];
                                $size = 'thumb_3';
                                $thumb = $image['sizes'][ $size ];
                                ?>
                                <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                            <?php endif; ?>
                        </div>
                        <div class="info">
                            <div class="title"><?php the_sub_field('название'); ?></div>
                            <div class="txt">
                                <?php the_sub_field('цена'); ?>
                            </div>
                            <div class="center"><span class="btn">Заказать</span></div>
                        </div>
                        <div class="order">
                            <div class="order_inner">
                                <div class="order_box">
                                    <div class="name">Форма заказа</div>
                                    <?php echo do_shortcode( '[contact-form-7 id="116" title="Форма заказа"]' ); ?>
                                    <div class="close">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item_price -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="portfolio landingItem" id="portfolio">
            <div class="wrap">
                <div class="sub_title">Портфолио работ </div>
                <div class="portfolio_list">
                    <div class="col">
                        <?php
                        $image = get_field('gallery_1');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_5';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a data-fancybox="images" href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                        <?php
                        $image = get_field('gallery_2');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_4';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a data-fancybox="images" href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <?php
                        $image = get_field('gallery_3');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_4';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a data-fancybox="images" href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                        <?php
                        $image = get_field('gallery_4');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_5';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                    </div>
                    <div class="col">
                        <?php
                        $image = get_field('gallery_5');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_5';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a data-fancybox="images" href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                        <?php
                        $image = get_field('gallery_6');
                        if( $image ):

                            $url = $image['url'];
                            $size = 'thumb_4';
                            $thumb = $image['sizes'][ $size ];
                            ?>
                            <a data-fancybox="images" href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($title); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="getting">
            <div class="wrap">
                <div class="getting_row">
                    <div class="getting_post">
                        <div class="sub_title"><?php the_field('r_1'); ?></div>
                        <div class="text">
                            <?php the_field('r_2'); ?>
                        </div>
                    </div>
                    <div class="getting_list">
                        <?php if(get_field('list_3')): ?>
                        <?php while(has_sub_field('list_3')): ?>
                        <div class="getting_item sh">
                            <div class="thumb">
                                <?php
                                $image = get_sub_field('image_get');
                                if( $image ):

                                    $url = $image['url'];
                                    $size = 'thumb_6';
                                    $thumb = $image['sizes'][ $size ];
                                    ?>
                                    <a href="<?php echo esc_url($url); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                                <?php endif; ?>
                            </div>
                            <div class="title"><?php the_sub_field('название'); ?></div>
                            <div class="txt"><?php the_sub_field('цена'); ?></div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="group">
            <div class="wrap">
                <div class="group_row">
                    <div class="feed_back_2">
                        <div class="sub_title">Форма заявки на заполнение</div>
                        <?php echo do_shortcode( '[contact-form-7 id="117" title="Форма 2"]' ); ?>
                    </div>
                    <div class="right_info shadow_left">
                        <div class="inner group_post" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_6.jpg)">
                            <div>
                                <div class="sub_title"><?php the_field('s_1'); ?></div>
                                <div class="text">
                                    <?php the_field('s_1'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dop">
            <div class="wrap">
                <div class="sub_title">Дополните букет приятными и полезными товарами</div>
                <div class="dop_row">
                    <?php if(get_field('list_4')): ?>
                    <?php while(has_sub_field('list_4')): $cont ?>
                    <div class="dop_item sh">
                        <div class="dop_slider_image">
                            <?php 
                            $images = get_sub_field('thumb_image');
                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <div>
                                        <a data-fancybox="images<?php echo $cont2 ?>" href="<?php echo esc_url($image['url']); ?>">
                                             <img src="<?php echo esc_url($image['sizes']['thumb_7']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="info">
                            <div class="title"><?php the_sub_field('название'); ?></div>
                            <div class="price"><?php the_sub_field('цена'); ?></div>
                            <div><span class="btn">Дополнить</span></div>
                        </div>
                        
                        <div class="order">
                            <div class="order_inner">
                                <div class="order_box">
                                    <div class="name">Форма заказа</div>
                                    <?php echo do_shortcode( '[contact-form-7 id="116" title="Форма заказа"]' ); ?>
                                    <div class="close">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dop_item -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="shar">
            <div class="wrap">
                <div class="sub_title">Удиви своих любимых большимы гариками в виде сердца</div>
                <div class="shar_row">
                    <?php if(get_field('list_5')): ?>
                    <?php while(has_sub_field('list_5')): ?>
                    <div class="shar_item">
                        <div class="thumb">
                            <?php
                                $image = get_sub_field('изображения');
                                if( $image ):

                                    $url = $image['url'];
                                    $size = 'thumb_8';
                                    $thumb = $image['sizes'][ $size ];
                                    ?>
                                    <a href="<?php echo esc_url($url); ?>" style="background-image: url(<?php echo esc_url($thumb); ?>)"></a>
                                <?php endif; ?>
                        </div>
                        <div class="title"><?php the_sub_field('название'); ?></div>
                        <div class="text">
                            <?php the_sub_field('цена'); ?>
                        </div>
                        <div class="readmore"><span class="btn">Заказать</span></div>
                        <div class="order">
                            <div class="order_inner">
                                <div class="order_box">
                                    <div class="name">Форма заказа</div>
                                    <?php echo do_shortcode( '[contact-form-7 id="116" title="Форма заказа"]' ); ?>
                                    <div class="close">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="develiry landingItem" id="develiry">
            <div class="wrap">
                <div class="sub_title">Доставка</div>
                <?php if(get_field('develiry')): ?>
                <?php while(has_sub_field('develiry')): ?>                
                <div class="develiry_item sh">
                    <div class="title"><?php the_sub_field('название'); ?></div>
                    <div class="top">
                        <p>
                            <label>В пределах МКАД:</label><span><?php the_sub_field('в_мкад'); ?></span></p>
                        <p>
                            <label>За МКАД:</label> <?php the_sub_field('за_мкад'); ?></p>
                    </div>
                    <div class="bottom">
                        <?php the_sub_field('текст'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="contacts landingItem" id="contacts">
            <div class="wrap">
                <div class="contacts_row">
                    <div class="left_info shadow_center">
                        <div class="inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_7.jpg)">
                            <div class="cc">
                                <div class="sub_title"><?php the_field('t_1'); ?></div>
                                <div class="text">
                                    <?php the_field('t_2'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts_post">
                        <div class="sub_title">Приезжайте к нам за розами!</div>
                        <div class="c_adres"><img src="<?php echo get_template_directory_uri(); ?>/images/adres.svg" alt=""><?php the_field('адрес'); ?></div>
                        <div class="c_time"><img src="<?php echo get_template_directory_uri(); ?>/images/clock_2.svg" alt=""><?php the_field('время_работы'); ?></div>
                        <div class="c_phone"><img src="<?php echo get_template_directory_uri(); ?>/images/phone_2.svg" alt=""><a href="tel:<?php the_field('телефон'); ?>"><?php the_field('телефон'); ?></a></div>
                        <div><span class="btn">Заказать</span></div>
                        <div class="order">
                            <div class="order_inner">
                                <div class="order_box">
                                    <div class="name">Форма заказа</div>
                                    <?php echo do_shortcode( '[contact-form-7 id="116" title="Форма заказа"]' ); ?>
                                    <div class="close">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer_bg">
                <div class="wrap">
                    <div class="footer_top">
                        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></div>
                        <div class="menu_main_footer">
                            <ul>
                                <li><a href="#products">Товары и цены</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="#develiry">Доставка и оплата</a></li>
                                <li><a href="#contacts">Где мы находимся</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="slogan"><?php the_field('слоган'); ?></div>
                        <div class="left">
                            <div class="phone"><a href="tel:<?php the_field('телефон'); ?>"><?php the_field('телефон'); ?></a></div>
                            <div class="time"><?php the_field('время_работы'); ?></div>
                            <div class="whatsapp"><a href="<?php the_field('whatsapp'); ?>">Написать в Whatsapp</a></div>
                        </div>
                    </div>
                    <div class="copy"><?php the_field('copy'); ?></div>
                </div>
            </div>
        </footer>
    </div>
<?php get_footer(); ?>
