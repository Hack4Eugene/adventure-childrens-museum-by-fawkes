<?php

$context = Timber::get_context();
$post = new TimberPost();
$events = Timber::get_posts([ 'post_type' => 'event' ]);

$past_events = array_filter($events, function($event) {
  return $event->get_field('past');
});

$current_events = array_filter($events, function($event) {
  return !$event->get_field('past');
});

$context['body_class'] = 'events-page';
$context['post'] = $post;
$context['past_events'] = $past_events;
$context['current_events'] = $current_events;

Timber::render(get_post_templates($post), $context );
