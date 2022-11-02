<?php
function ping($host, $timeout = 10)
{
    $output = array();
    $com = 'ping -n -w ' . $timeout . ' -c 1 ' . escapeshellarg($host);
    $exitcode = 0;
    exec($com, $output, $exitcode);
    if ($exitcode == 0 || $exitcode == 1)
    {
        foreach($output as $cline)
        {
            if (strpos($cline, ' bytes from ') !== FALSE)
            {
                $out = (int)ceil(floatval(substr($cline, strpos($cline, 'time=') + 5)));
                return $out;
            }
        }
    }

    return FALSE;
}

$total = 0;
for ($i = 0; $i<=9; $i++)
{
    $total += ping('api.wuffs.net');
}

echo $total;