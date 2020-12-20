
<?php
    get_header();
?>

    <div  class="h-full" style="height: 100vh;">
        <div class="h-full bg-cover" style="background: url('//cdn.shopify.com/s/files/1/2301/3747/files/794368794399217904859144399669693251784154149923_2048x2048.jpg?v=1596150179') no-repeat center center;background-size: cover;">
            <h2>THE #1 SOURCE FOR PREMIUM VOCAL SAMPLES</h2>
        </div>
    </div>
  
    <section>
        <div>
            <h2>Latest Release</h2>
        </div>

        <div class="container mx-auto">
            <div  class="flex">
                <div>
                    <a href="">
                        <img class="w-full" style="max-height: 800px;" src="https://cdn.shopify.com/s/files/1/2301/3747/products/91V_SG_Cover_Art_1024x1024.png?v=1596990056" />
                    </a>
                </div>
                <div>
                    <h3>Sad Girl: Alt Pop</h3>
                    <p>Veiled in melancholy, <a href="">Sad Girl: Alt Pop</a> explores the dark gritty electro landscape popularised by artists such as Billie Eilish, Lorde and Halsey. Delivering a modern take on contemporary pop, with a rich pallet of moody lyrics, vocal & melodic loops, grungy synths, bouncing 808s and resampled drum and percussion.</p>

                    <button class="hover:bg-transparent uppercase text-xs bg-pink-300 text-pink-dark font-semibold  py-2 px-4 border border-pink hover:border-2   mr-2">
                        Button
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="text-center">
            <?php sectionTitle("Featured"); ?>
        </div>

        <div class="container mx-auto">
            <div class="flex flex-wrap">

                <?php vocalSampleExcerpt(); vocalSampleExcerpt(); vocalSampleExcerpt(); vocalSampleExcerpt(); ?>

            </div>
        </div>
    </section>

    <section>
        <div class="text-center">
            <?php sectionTitle("Blog"); ?>
        </div>

        <div class="container mx-auto xxxl">
            <div class="flex flex-wrap">

               
                <?php 

                    $the_query = new WP_Query( array(
                        // 'category_name' => 'news',
                        'posts_per_page' => 3,
                    )); 
                    
                     if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" ); ?>
			 
                          <?php 
                                // blogExcerpt(
                                //     $thumbnail[0],
                                //     get_the_date(),
                                //     get_the_title(), 
                                //     get_the_excerpt(),  
                                //     get_permalink(), 
                                // );   


                                blogExcerpt([
                                    'title' => get_the_title()
                                ]);
                          
                            ?>
                        
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                      
                      <?php else : ?>
                        <p><?php __('No News'); ?></p>
                      <?php endif; ?>
                 
            </div>
        </div>
    </section>

<?php 
get_footer();

