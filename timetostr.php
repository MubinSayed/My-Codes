<?php
echo timetostr(1565211182);

function timetostr($ts_time)
{
    return date('Y-m-d H:i:s',$ts_time);
}

// output : 2019-08-07 16:53:02

