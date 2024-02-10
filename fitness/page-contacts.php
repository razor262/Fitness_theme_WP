<?php   
/*   
Template Name: Шаблон "Контакты"   
*/    
?>  
<?php get_header(); ?>   

<section id="contact">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac1cb9b0e432f1c54835f2ec99052be7c093d2a60b1369f78eb5a5e6ec644cc69&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe> 
                
                <div class="contact-card">
                     <h2><?php the_field('sec6_contacts'); ?></h2>
                    
                     <!-------------------------->
                     <?php if( have_rows('sec6_repeater') ): ?>
                     <?php while( have_rows('sec6_repeater') ): the_row(); ?>
                        <div class="contact-item"><span><?php the_sub_field('sec6_phone'); ?></span><?php the_sub_field('sec6_info'); ?></div>
                     <?php endwhile; ?>
                     <?php endif; ?>   
                     <!-------------------------->
                  
                  </div>
               </div>
            </div>
         </div>
</section>  

<?php get_footer(); ?>   






