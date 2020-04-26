<?php
    require_once("vendor/autoload.php");

    // namespace
    use Rain\Tpl;

    // config
    $config = array(
        "tpl_dir"       => "tpl/",
        "cache_dir"     => "cache/",
       // "debug"         => false, // set to false to improve the speed
    );

    Tpl::configure( $config );

    $tpl = new Tpl;

    // assign a variable
    $tpl->assign( "name", "Diego Mendes" );
    $tpl->assign( "version", phpversion() );

    // assign an array
 
    // draw the template
    $tpl->draw( "index");
?>