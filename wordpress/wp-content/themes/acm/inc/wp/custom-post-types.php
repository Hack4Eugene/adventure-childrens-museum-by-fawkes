<?php

register_post_type('staff',
	[
		'labels' => [
			'name'               => __( 'Staff' ),
			'singular_name'      => __( 'Staff' ),
			'menu_name'          => __( 'Staff' ),
			'name_admin_bar'     => __( 'Staff' ),
			'add_new'            => __( 'Add Staff' ),
			'add_new_item'       => __( 'Add Staff ' ),
			'new_item'           => __( 'New Staff' ),
			'edit_item'          => __( 'Edit Staff' ),
			'view_item'          => __( 'View Staff' ),
			'all_items'          => __( 'All Staff' ),
			'search_items'       => __( 'Search Staff' ),
			'parent_item_colon'  => __( 'Parent Staff:' ),
			'not_found'          => __( 'No Staff found.' ),
			'not_found_in_trash' => __( 'No Staff found in Trash.' )
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [ 'slug' => 'staff' ],
		'supports'    => [ 'title', 'thumbnail' ]
	]
);

register_post_type('event',
	[
		'labels' => [
			'name'               => __( 'Events' ),
			'singular_name'      => __( 'Event' ),
			'menu_name'          => __( 'Events' ),
			'name_admin_bar'     => __( 'Event' ),
			'add_new'            => __( 'Add Event' ),
			'add_new_item'       => __( 'Add Event ' ),
			'new_item'           => __( 'New Event' ),
			'edit_item'          => __( 'Edit Event' ),
			'view_item'          => __( 'View Event' ),
			'all_items'          => __( 'All Events' ),
			'search_items'       => __( 'Search Events' ),
			'parent_item_colon'  => __( 'Parent Event:' ),
			'not_found'          => __( 'No Event found.' ),
			'not_found_in_trash' => __( 'No Event found in Trash.' )
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [ 'slug' => 'event' ],
		'supports'    => [ 'title', 'thumbnail' ]
	]
);

register_post_type('exhibit',
	[
		'labels' => [
			'name'               => __( 'Exhibits' ),
			'singular_name'      => __( 'Exhibit' ),
			'menu_name'          => __( 'Exhibits' ),
			'name_admin_bar'     => __( 'Exhibit' ),
			'add_new'            => __( 'Add Exhibit' ),
			'add_new_item'       => __( 'Add Exhibit ' ),
			'new_item'           => __( 'New Exhibit' ),
			'edit_item'          => __( 'Edit Exhibit' ),
			'view_item'          => __( 'View Exhibit' ),
			'all_items'          => __( 'All Exhibits' ),
			'search_items'       => __( 'Search Exhibits' ),
			'parent_item_colon'  => __( 'Parent Exhibit:' ),
			'not_found'          => __( 'No Exhibit found.' ),
			'not_found_in_trash' => __( 'No Exhibit found in Trash.' )
		],
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => [ 'slug' => 'exhibit' ],
		'supports'    => [ 'title', 'thumbnail' ]
	]
);
