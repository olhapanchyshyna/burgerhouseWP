<?php get_header(); ?>
    
        <section class="main__content" id="main">
            <div class="container">
                <div class="main__info">
                    <span class="main__info-small">New Menu</span>
                    <h1 class="main__title">Cheddar Burger</h1>
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/main_burger.png" alt="burger" class="main__photo hidemax">
                    <div class="main__description">We have updated our menu, hurry up to try our seasonal novelties and enjoy the excellent taste of our burgers. We prepare the best burgers in town using selected marble beef.</div>
                    <div class="main__btn">
                        <a href="#menu" class="btn">View Menu</a>
                    </div>
                </div>
                <img src="<?php echo bloginfo("template_url");?>/assets/images/main_burger.png" alt="burger" class="main__photo hidemin">
            </div>
        </section>
    </section>

    <section class="why" id="why">
        <div class="container">
            <h2 class="title">Why Choose Us?</h2>
            <div class="why__list">
                <div class="why__item">
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/why/burger.svg" alt="burger" class="why__item-img">
                    <div class="why__item-title">Unique Recipes</div>
                    <div class="why__item-description">Our burgers have a unique combination of flavors that are unlike any others. We carefully select the best ingredients and flavor combinations for our menu.</div>
                </div>
                <div class="why__item">
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/why/meat.svg" alt="meat" class="why__item-img">
                    <div class="why__item-title">Marble Beef</div>
                    <div class="why__item-description">We use premium 100% marble beef for our burgers, sourced exclusively from farmers. We are confident in the quality of our meat.</div>
                </div>
                <div class="why__item">
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/why/food-truck.svg" alt="food-truck" class="why__item-img">
                    <div class="why__item-title">Fast Delivery</div>
                    <div class="why__item-description">We offer delivery within the Moscow Ring Road in 30 minutes, and if we don't make it on time, the delivery is free. We carefully package our burgers to ensure they stay warm during transportation.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="products" id="menu">
        <div class="container">
            <h2 class="title">Choose Your Burger</h2>
            <div class="products__list">
                <!-- 1 -->
                <div class="products__item">
                    <div class="products__item-img">
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-1.png" alt="burger 1">
                    </div>
                    <div class="products__item-title">Cheddar & Bacon Burger</div>
                    <div class="products__item-description">Crispy beef patty, bun, tomato, Cheddar cheese, bacon, red onion, iceberg lettuce, mayonnaise, ketchup, cheese sauce</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">8$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-2.png" alt="burger 2">
                    </div>
                    <div class="products__item-title">BBQ Burger with Bacon and Chicken</div>
                    <div class="products__item-description">Brioche sesame seed bun, chicken patty, Cheddar cheese, tomato, pickled cucumber, pickled onion, Romaine lettuce, bacon, BBQ sauce</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">7$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-3.png" alt="burger 3">
                    </div>
                    <div class="products__item-title">Double Beef Burger</div>
                    <div class="products__item-description">Two beef patties, Cheddar cheese, romaine lettuce, pickles, fresh tomato, bacon, red onion, burger sauce, mustard</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">10$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-4.png" alt="burger 4">
                    </div>
                    <div class="products__item-title">Bavarian Burger</div>
                    <div class="products__item-description">Burger bun, beef patty, red onion, cheese, hunter sausage, barbecue sauce, cheese sauce, iceberg lettuce</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">7$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-5.png" alt="burger 5">
                    </div>
                    <div class="products__item-title">Bacon Cheeseburger</div>
                    <div class="products__item-description">Burger bun, beef patty, bacon, tomato, pickles, cheese, cheese sauce, ketchup, greens</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">8$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-6.png" alt="burger 6">
                    </div>
                    <div class="products__item-title">Indiana Burger</div>
                    <div class="products__item-description">Burger bun, chicken patty, bacon, egg, pickles, crispy onions, ketchup, cheese sauce, mustard, greens</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">9$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-7.png" alt="burger 7">
                    </div>
                    <div class="products__item-title">Veggie Burger</div>
                    <div class="products__item-description">Burger bun, vegetarian patty, red onion, cheese, fresh tomato, barbecue sauce, cheese sauce, iceberg lettuce</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">8$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-8.png" alt="burger 8">
                    </div>
                    <div class="products__item-title">Плаксивый Джо</div>
                    <div class="products__item-description">Булочка для бургера, говяжья котлета,gудинка, помидор, огурец маринованный, красный лук, сыр, перец халапеньо, кетчуп, зелень</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">7$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-9.png" alt="burger 9">
                    </div>
                    <div class="products__item-title">Whiny Joe</div>
                    <div class="products__item-description">Burger bun, beef patty, bacon, tomato, pickled cucumber, red onion, cheese, jalapeno pepper, ketchup, greens</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">11$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-10.png" alt="burger 10">
                    </div>
                    <div class="products__item-title">Freshburger</div>
                    <div class="products__item-description">Burger bun, beef patty, bacon, cheddar cheese, egg, salami, BBQ sauce, cheese sauce, iceberg lettuce, fresh tomato</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">9$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-11.png" alt="burger 11">
                    </div>
                    <div class="products__item-title">Zucchini Burger</div>
                    <div class="products__item-description">Burger bun, vegetarian chickpea patty, grilled zucchini, tomato, pickled cucumber, cheese, mustard sauce, ketchup, greens</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">8$</div>
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
                        <img src="<?php echo bloginfo("template_url");?>/assets/images/products/burger-12.png" alt="burger 12">
                    </div>
                    <div class="products__item-title">Double Cheddar Burger</div>
                    <div class="products__item-description">Burger bun, beef patty, bacon, red onion, pickled cucumber, tomato, ketchup, double cheddar cheese, mustard, greens</div>
                    <div class="products__item-footer">
                        <div class="products__item-info">
                            <div class="products__item-price">9$</div>
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
            <h2 class="title">Order Placement</h2>
            <img src="<?php echo bloginfo("template_url");?>/assets/images/order/order_image.png" alt="order" class="order__img">
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