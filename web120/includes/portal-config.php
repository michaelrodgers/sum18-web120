<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Michael's WEB120 Title Page";
    break;
        
    case 'contactme.php':
        $title = "Sara's WEB120 Contact Page";
    break;

    default:
        $title = THIS_PAGE;
}
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1["https://docs.google.com/document/d/1S3n4uPoKRVpr1J1-h7N5WLsh7rnIOiqBIlQQNE57kV8/edit"] = "Flowchart";
$nav1["https://tonymaganajr.azurewebsites.net/index.html"] = "Final Project";
$nav1['contact.php'] = "Contact Michael";

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }
    }
    
    return $myReturn;
}

?>
