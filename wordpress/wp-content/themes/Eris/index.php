<?php
/**
 * @package WordPress
 * @subpackage White Label
 */
get_template_part('parts/header');

loop();

//Wont show up on archive pages.
comments_template('/parts/answers.php');

get_template_part('parts/footer');