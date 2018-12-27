<?php

class Webflow_Walker extends Walker_Nav_Menu {


	public function walk( $elements, $max_depth )
    {
        $list = array ();

        foreach ( $elements as $item )
        {
            if ( $item->current )
                $list[] = "<a href='$item->url' class='navbar-link w-nav-link w--current'>$item->title</a>";
            else
                $list[] = "<a href='$item->url' class='navbar-link w-nav-link'>$item->title</a>";
        }

        return join( "\n", $list );
    }

}


?>