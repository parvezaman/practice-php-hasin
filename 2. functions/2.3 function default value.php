<?php
function serve($foodItem="Coffee", $numberOfServing=1)
{
    echo "{$numberOfServing} unit/s of {$foodItem} is served!";
};
// remember! default parameter always will be the last parameter
serve();
