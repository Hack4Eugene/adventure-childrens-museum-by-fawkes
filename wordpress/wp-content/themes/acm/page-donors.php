<?php

$context = Timber::get_context();
$post = new TimberPost();

$context['body_class'] = 'donors-page';
$context['post'] = $post;

Timber::render(get_post_templates($post), $context );
