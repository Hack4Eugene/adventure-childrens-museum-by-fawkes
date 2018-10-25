<?php

$context = Timber::get_context();
$post = new TimberPost();
$exhibits = Timber::get_posts([ 'post_type' => 'exhibit' ]);

console_log($exhibits);

$context['body_class'] = 'exhibits-page';
$context['post'] = $post;
$context['exhibits'] = $exhibits;

Timber::render(get_post_templates($post), $context );
