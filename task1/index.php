<style>
    <?php 
    $viewer = getenv( "HTTP_USER_AGENT" );
    if( preg_match('/Chrome/i' , "$viewer") ){
        include 'chrome.css';
        } elseif (preg_match( "/Mozilla/i", "$viewer" )) {
            include 'mozilla.css';
        };
    ?>
</style>

