<?php get_header(); ?>
    
        <section class="main__content" id="main">
            <div class="container">
                <div class="main__info">
                    <span class="main__info-small">New Menu</span>
                    <h1 class="main__title"><?php the_field('main_title');?></h1>
                    <img src="<?php the_field('main_img');?>" alt="burger" class="main__photo hidemax">
                    <div class="main__description"><?php the_field('main_descr');?></div>
                    <div class="main__btn">
                        <a href="#menu" class="btn"><?php the_field('main_btn');?></a>
                    </div>
                </div>
                <img src="<?php the_field('main_img');?>" alt="burger" class="main__photo hidemin">
            </div>
        </section>
    </section>

    <section class="why" id="why">
        <div class="container">
            <h2 class="title"><?php the_field('why_title', 32);?></h2>
            <div class="why__list">
                <div class="why__item">
                    <img src="<?php the_field('why_item1_img', 32);?>" alt="burger" class="why__item-img">
                    <div class="why__item-title"><?php the_field('why_item1_title', 32);?></div>
                    <div class="why__item-description"><?php the_field('why_item1_descr', 32);?></div>
                </div>
                <div class="why__item">
                    <img src="<?php the_field('why_item2_img', 32);?>" alt="burger" class="why__item-img">
                    <div class="why__item-title"><?php the_field('why_item2_title', 32);?></div>
                    <div class="why__item-description"><?php the_field('why_item2_descr', 32);?></div>
                </div>
                <div class="why__item">
                    <img src="<?php the_field('why_item3_img', 32);?>" alt="burger" class="why__item-img">
                    <div class="why__item-title"><?php the_field('why_item3_title', 32);?></div>
                    <div class="why__item-description"><?php the_field('why_item3_descr', 32);?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="products" id="menu">
        <div class="container">
            <h2 class="title"><?php the_field('choose_title', 38);?></h2>
            <div class="products__list">
                <!-- 1 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item1_img', 38);?>" alt="burger 1">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item1_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item1_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item1_price', 38);?>$</div>
                            <div class="products__item-weight">360g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 2 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item2_img', 38);?>" alt="burger 2">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item2_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item2_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item2_price', 38);?>$</div>
                            <div class="products__item-weight">390g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 3 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item3_img', 38);?>" alt="burger 3">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item3_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item3_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item3_price', 38);?>$</div>
                            <div class="products__item-weight">420g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order 
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 4 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item4_img', 38);?>" alt="burger 4">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item4_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item4_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item4_price', 38);?>$</div>
                            <div class="products__item-weight">220 g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 5 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item5_img', 38);?>" alt="burger 5">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item5_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item5_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item5_price', 38);?>$</div>
                            <div class="products__item-weight">220g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 6 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item6_img', 38);?>" alt="burger 6">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item6_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item6_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item6_price', 38);?>$</div>
                            <div class="products__item-weight">320g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 7 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item7_img', 38);?>" alt="burger 7">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item7_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item7_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item7_price', 38);?>$</div>
                            <div class="products__item-weight">280g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 8 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item8_img', 38);?>" alt="burger 8">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item8_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item8_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item8_price', 38);?>$</div>
                            <div class="products__item-weight">380g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 9 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item9_img', 38);?>" alt="burger 9">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item9_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item9_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item9_price', 38);?>$</div>
                            <div class="products__item-weight">400g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 10 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item10_img', 38);?>" alt="burger 10">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item10_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item10_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item10_price', 38);?>$</div>
                            <div class="products__item-weight">300g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 11 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item11_img', 38);?>" alt="burger 11">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item11_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item11_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item11_price', 38);?>$</div>
                            <div class="products__item-weight">320g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- 12 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php the_field('choose_item12_img', 38);?>" alt="burger 12">
                    </div>
                    <div class="products__item-title"><?php the_field('choose_item12_title', 38);?></div>
                    <div class="products__item-description"><?php the_field('choose_item12_descr', 38);?></div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price"><?php the_field('choose_item12_price', 38);?>$</div>
                            <div class="products__item-weight">360g</div>
                        </div>
                        <a href="#order" class="btn products__item-btn">Order
                            <span>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 18.5C17.5304 18.5 18.0391 18.7107 18.4142 19.0858C18.7893 19.4609 19 19.9696 19 20.5C19 21.0304 18.7893 21.5391 18.4142 21.9142C18.0391 22.2893 17.5304 22.5 17 22.5C16.4696 22.5 15.9609 22.2893 15.5858 21.9142C15.2107 21.5391 15 21.0304 15 20.5C15 19.39 15.89 18.5 17 18.5ZM1 2.5H4.27L5.21 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5C21 5.67 20.95 5.84 20.88 6L17.3 12.47C16.96 13.08 16.3 13.5 15.55 13.5H8.1L7.2 15.13L7.17 15.25C7.17 15.3163 7.19634 15.3799 7.24322 15.4268C7.29011 15.4737 7.3537 15.5 7.42 15.5H19V17.5H7C6.46957 17.5 5.96086 17.2893 5.58579 16.9142C5.21071 16.5391 5 16.0304 5 15.5C5 15.15 5.09 14.82 5.24 14.54L6.6 12.09L3 4.5H1V2.5ZM7 18.5C7.53043 18.5 8.03914 18.7107 8.41421 19.0858C8.78929 19.4609 9 19.9696 9 20.5C9 21.0304 8.78929 21.5391 8.41421 21.9142C8.03914 22.2893 7.53043 22.5 7 22.5C6.46957 22.5 5.96086 22.2893 5.58579 21.9142C5.21071 21.5391 5 21.0304 5 20.5C5 19.39 5.89 18.5 7 18.5ZM16 11.5L18.78 6.5H6.14L8.5 11.5H16Z" fill="#191411"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <button class="hideBtn">More</button>
        </div>
    </section>

    <section class="order" id="order">
        <div class="container">
            <h2 class="title"><?php the_field('order_title', 103);?></h2>
            <img src="<?php the_field('order_img', 103);?>" alt="order" class="order__img">
            <div class="order__content">
                <div class="order__form">
                    <div class="order__form-description">Please fill in all the required information and our manager will contact you to confirm the order.</div>
                    <div class="order__forms-inputs">
                        <div class="order__forms-input">
                            <input name="order" type="text" placeholder="Your Order" required>
                        </div>
                        <div class="order__forms-input">
                            <input name="name" type="text" placeholder="Your Name" required>
                        </div>
                        <div class="order__forms-input">
                            <input name="number" type="tel" placeholder="Your Phone Number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn order__btn">Place Order</button>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>