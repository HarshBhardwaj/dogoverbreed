<!-- Creates the header of the page -->
<?php get_header(); ?>
    <?php 
    // This is for creating a loop for posts
    if(have_posts() ):
        // This while loop is to print out all the posts until you reach end of your post
        while(have_posts()): the_post(); ?>
            <!-- Displays the title of your post -->
            <h3><?php the_title(); ?></h3>
            <!-- Prints out the date and time of the post and which category was the post added into -->
            <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
            <!-- Prints out the content of the post -->
            <p><?php the_content();?></p>
            <!-- This is to create a break between each post -->
            <hr>
        <?php endwhile;
    endif;

    ?>
<!-- Creates the footer of the page -->
<?php get_footer(); ?>