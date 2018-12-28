<?php
	
	if (function_exists('p2p_register_connection_type')) :

		p2p_register_connection_type( array( 
			'name' => 'revista_memes',
			'from' => 'revista',
			'to' => 'meme',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Memes relacionados', 'to' => 'Edição relacionada' )
		) );

		p2p_register_connection_type( array( 
			'name' => 'revista_posts',
			'from' => 'revista',
			'to' => 'post',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Posts relacionados', 'to' => 'Edição relacionada' )
		) );

		p2p_register_connection_type( array( 
			'name' => 'post_divas',
			'from' => 'post',
			'to' => 'diva',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Divas relacionadas', 'to' => 'Post relacionado' )
		) );

	endif;

?>