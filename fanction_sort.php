<?php
function cmp($a, $b)
{
if ($a['Position'] == $b['Position']) {
return 0;
}
return ($a['Position'] < $b['Position']) ? -1 : 1;
};

