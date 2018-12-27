<?php
	
	if (function_exists('p2p_register_connection_type')) :

		p2p_register_connection_type( array( 
			'name' => 'revista_memes',
			'from' => 'revista',
			'to' => 'meme',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Memes relacionados', 'to' => 'Edição relacionada' )
		) );

		/*
		p2p_register_connection_type( array( 
			'name' => 'projetos_blog',
			'from' => 'projetos',
			'to' => 'blog',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Posts relacionados', 'to' => 'Projeto relacionado' )
		) );

		p2p_register_connection_type( array( 
			'name' => 'eventos_blog',
			'from' => 'eventos',
			'to' => 'blog',
			'cardinality' => 'one-to-many',
			'title' => array( 'from' => 'Posts relacionados', 'to' => 'Evento relacionado' )
		) );
		*/

	endif;

?>