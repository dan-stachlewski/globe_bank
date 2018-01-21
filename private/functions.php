<?php
//This function takes in the path that you want, checks to see if you have added a '/' and add's it if you didn't & then appends it to the WWW_ROOT URL CONSTANT providing the correct path (2.1 8:05min)
// We have a single function we can use which will make sure we always have a URL that takes care of whether or not its on a shared piece of code or whether it's nested several layers deep. It will always be a URL to the correct location.
// We still need to echo out the result tho... in the staff_header.inc.php
function url_for($script_path){
    //Adds the leading '/' if not present
    if($script_path[0] != '/'){
        $script_path = "/" . $script_path;
    }
    //We have defined an absolute point to base all our URL's off of, here is the root of the website - serve everything from here...
    return WWW_ROOT . $script_path;
}
