<?php

$context = Timber::get_context();
$post = new TimberPost();
$staff = Timber::get_posts([ 'post_type' => 'staff' ]);

$context['body_class'] = 'our-board-of-directors-page';
$context['post'] = $post;
$context['staff'] = $staff;

Timber::render(get_post_templates($post), $context );
