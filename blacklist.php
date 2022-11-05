<?php

$criminals = array(
    array(
        'name'          => 'Criminal-A',
        'age'           => 22,
        'specification' => 'Brown Hair',
        'serial'        => 1
    ),

    array(
        'name'          => 'Criminal-B',
        'age'           => '40',
        'specification' => 'Black eyes',
        'serial'        => 2
    ),

    array(
        'name'          => 'Criminal-C',
        'age'           => '35',
        'specification' => 'Black eyes',
        'serial'        => 3
    ),

    array(
        'name'          => 'Criminal-D',
        'age'           => '35',
        'specification' => 'Black eyes',
        'serial'        => 4
    )


);

$arrested = array(
    array(
        'name'          => 'Criminal-C',
        'age'           => '35',
        'specification' => 'Black eyes',
        'serial'        => 3
    ),

    array(
        'name'          => 'Criminal-D',
        'age'           => '35',
        'specification' => 'Black eyes',
        'serial'        => 4
    ),
);


function search($serial)
{
    global $criminals, $arrested;
    foreach ($criminals as $key => $value)
    {
        if ($value['serial'] == $serial)
        {
            echo "The Criminal is in our list";
            echo "<br>";
        }


    }
    foreach ($arrested as $key => $value)
    {
        if ($value['serial'] === $serial)
        {
            echo "The Criminal is already arrested :)";
            echo "<br>";
        }

    }

}


search(3);

?>
