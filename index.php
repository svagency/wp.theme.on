<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
	
<main id=main>
        <div class=page-content>
        <?php //the_content(); ?>
            <section class="hero hero--home">
                <div class=container>
                    <div class="row justify-content-between">
                        <div class="col-12 d-block d-lg-none">
                            <div class=hero__content>
                                <h1 class="text-center m-0"><em>Introducing</em> Raptive</h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 order-2 order-lg-1">
                            <div class=hero__content>
                                <h1 class="d-none d-lg-block"><em>Introducing</em> Raptive</h1>
                                <div>
                                    <p>CafeMedia and AdThrive are now Raptive, a new kind of company transforming creators into global brands and lasting businesses. Since the very beginning of blogging, we've been allies and advocates for all creators,
                                        with a seat at every table in the industry. Creators are the future of media. And together, the future is ours to create.</p>
                                    <div class="btn-wrapper justify-content-center justify-content-lg-start"><a href="https://publisher.adthrive.com/apply/site-info/" class="btn btn-primary" target=_blank rel="noopener noreferrer">Apply now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class=hero-carousel-wrapper>
                                <div id=lottie style="--fill: var(--raptive-blue)"></div>
                                <div class=hero-carousel id=heroCarousel data-hero-carousel>
                                    <div class=hero-carousel__slide data-color=var(--raptive-blue)><img src=/img/home/carousel/style.jpg alt="Style by Emily Henderson" class=hero-carousel__image></div>
                                    <div class=hero-carousel__slide data-color=var(--raptive-orange)><img src=/img/home/carousel/epic-gardening.jpg alt="Epic Gardening" class=hero-carousel__image></div>
                                </div>
                                <div class=hero-carousel-nav id=heroCarouselNav data-hero-carousel-nav>
                                    <div class=hero-carousel-nav__slide>
                                        <div class=hero-carousel-nav__selector><span>Style by Emily Henderson</span></div>
                                    </div>
                                    <div class=hero-carousel-nav__slide>
                                        <div class=hero-carousel-nav__selector><span>Epic Gardening</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="boasts raptive-block" data-section-anim>
                <div class="container container--narrow" data-anim>
                    <h2 class="h4 text-center"><em>Powering</em> creator independence</h2>
                </div>
                <div class=boasts__carousel data-boasts-carousel data-anim>
                    <div class=boasts__slide>
                        <div class=boast>
                            <h3 class=boast__heading>$2b+</h3>
                            <p class=boast__text>paid directly to creators</p>
                        </div>
                    </div>
                    <div class=boasts__slide>
                        <div class=boast>
                            <h3 class=boast__heading>195m</h3>
                            <p class=boast__text>consumers reached monthly through our creators' websites*</p>
                        </div>
                    </div>
                    <div class=boasts__slide>
                        <div class=boast>
                            <h3 class=boast__heading>Top 7</h3>
                            <p class=boast__text>ranked media company*</p>
                        </div>
                    </div>
                    <div class=boasts__slide>
                        <div class=boast>
                            <h3 class=boast__heading>500m</h3>
                            <p class=boast__text>consumers reached monthly through our creators' social media</p>
                        </div>
                    </div>
                </div>
                <div class="container container--narrow" data-anim>
                    <p class="boasts__cite text-center mt-4 mb-0">*Comscore</p>
                </div>
            </section>
            <section class="audiences raptive-block">
                <div class="container container--narrow">
                    <div class="audience row justify-content-center align-items-center" data-section-anim>
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0" data-anim><img src=/img/home/raptive-for-creators@sm.png data-src=/img/home/raptive-for-creators.png alt="Raptive for Creators" class="audience__image lazyload blur-up"></div>
                        <div class="col-12 col-lg-6">
                            <div class=audience__content data-anim>
                                <h2 class=text-eyebrow>Creators</h2>
                                <h3>Raptive for Creators</h3>
                                <p>We're your strategic partner, working hand-in-hand, equipping you with expert advice, smarter strategies, ad management, tailored technology, and inspired opportunities across every part of your business.</p>
                                <div class="btn-wrapper btn-wrapper--center"><a href=/creators class="btn btn-outline-dark">Learn more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="audience row justify-content-center align-items-center" data-section-anim>
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0 order-lg-2" data-anim><img src=/img/home/raptive-for-enterprise@sm.png data-src=/img/home/raptive-for-enterprise.png alt="Raptive for Enterprise" class="audience__image lazyload blur-up"></div>
                        <div class="col-12 col-lg-6">
                            <div class=audience__content data-anim>
                                <h2 class=text-eyebrow>Enterprise</h2>
                                <h3>Raptive for Enterprise</h3>
                                <p>Whether you're currently managing your advertising business in-house or with a managed service, we can help you drive more revenue, cut costs and eliminate inefficiencies. Keep growing today and into the future with our
                                    unmatched expertise, new revenue streams and world-class tech.</p>
                                <div class="btn-wrapper btn-wrapper--center"><a href=/enterprise class="btn btn-outline-dark">Learn more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="solutions raptive-block">
                <div class="container container--narrow" data-section-anim>
                    <h2 class=text-center data-anim>Solutions to <em>maximize</em> your ambitions</h2>
                </div>
                <div class="container container--narrow">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-4 mt-3 mt-lg-4" data-section-anim>
                            <div class=solution data-anim><img src=/img/icon-audience.svg loading=lazy alt="Audience icon" class=solution__image>
                                <h3 class="h4 m-0">Audience</h3>
                                <p class=m-0>Captivate bigger audiences. Keep them coming back for more. Share your content.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mt-3 mt-lg-4" data-section-anim>
                            <div class=solution data-anim><img src=/img/icon-revenue.svg loading=lazy alt="Revenue icon" class=solution__image>
                                <h3 class="h4 m-0">Revenue</h3>
                                <p class=m-0>Cash in on your passion. Make more with the world's best ad management. Explore new revenue streams.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mt-3 mt-lg-4" data-section-anim>
                            <div class=solution data-anim><img src=/img/icon-business.svg loading=lazy alt="Business icon" class=solution__image>
                                <h3 class="h4 m-0">Business</h3>
                                <p class=m-0>Strengthen your strategies. Make moves. Get expert guidance and support to keep your team growing and business thriving.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonials raptive-block">
                <div class="container container--narrow" data-section-anim>
                    <h2 class=text-center data-anim><em>Create</em> one-of-a-kind content? You need a one-of-a-kind partner.</h2>
                </div>
                <div class="pt-3 pt-md-4 pt-lg-5" data-section-anim>
                    <div class=testimonials__carousel data-testimonials-carousel data-anim>
                        <div class=testimonials__slide>
                            <blockquote class=testimonial><img src=/img/home/testimonials/caz-makepeace.jpg class=testimonial__image alt="Caz Makepeace">
                                <div class=testimonial__body>
                                    <p class=h6>&ldquo;They understand creators, anticipate my needs and let me hand off the technology side of monetizing my blog.&rdquo;</p><cite><span>Caz Makepeace</span> <span><a href="https://www.ytravelblog.com/" target=_blank rel="noopener noreferrer">Y Travel Blog</a></span></cite></div>
                            </blockquote>
                        </div>
                        <div class=testimonials__slide>
                            <blockquote class=testimonial><img src=/img/creators/testimonials/maria-lichty.jpg class=testimonial__image alt="Maria Lichty">
                                <div class=testimonial__body>
                                    <p class=h6>&ldquo;The best — trustworthy, knowledgeable, supportive - they provide the best RPMs, great resources and they CARE.&rdquo;</p><cite><span>Maria Lichty</span> <span><a href="https://www.twopeasandtheirpod.com/" target=_blank rel="noopener noreferrer">Two Peas & Their Pod</a></span></cite></div>
                            </blockquote>
                        </div>
                        <div class=testimonials__slide>
                            <blockquote class=testimonial><img src=/img/home/testimonials/michael-ohalloran.jpg class=testimonial__image alt="Michael O'Halloran">
                                <div class=testimonial__body>
                                    <p class=h6>&ldquo;In addition to increasing my ad revenue by over 300%, They freed up my time so I could spend it preparing content.&rdquo;</p><cite><span>Michael O'Halloran</span> <span><a href="https://www.sportsfeelgoodstories.com/" target=_blank rel="noopener noreferrer">Sports Feel Good Stories</a></span></cite></div>
                            </blockquote>
                        </div>
                        <div class=testimonials__slide>
                            <blockquote class=testimonial><img src=/img/home/testimonials/arnold-kim.jpg class=testimonial__image alt="Arnold Kim">
                                <div class=testimonial__body>
                                    <p class=h6>&ldquo;Raptive has helped us optimize our ad revenue while allowing us to maintain our site experience.&rdquo;</p><cite><span>Arnold Kim</span> <span><a href="https://www.macrumors.com/" target=_blank rel="noopener noreferrer">MacRumors</a></span></cite></div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <section class="callouts raptive-block">
                <div class="container container--narrow" data-section-anim>
                    <div class="callout row justify-content-center align-items-center">
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0" data-anim><img src=/img/home/home-cta-callout@sm.png data-src=/img/home/home-cta-callout.png alt="Photo of people" class="callout__image callout__image--centered lazyload blur-up"></div>
                        <div class="col-12 col-lg-6">
                            <div class="callout__content callout__content--centered" data-anim>
                                <h3>Ready to make moves?</h3>
                                <p>We're here to give you the support, freedom, aha's, and big ideas you need to get to next.</p>
                                <div class="btn-wrapper btn-wrapper--center"><a href="https://publisher.adthrive.com/apply/site-info/" class="btn btn-primary" target=_blank rel="noopener noreferrer">Apply now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>