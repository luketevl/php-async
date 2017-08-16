<?php

include 'fsockopen.php';

$data = array(
		array(
			'c' => 'a1',
			't' => 5
		),
		array(
                        'c' => 'a2',
                        't' => 2
                ),
		array(
                        'c' => 'a3',
                        't' => 1
                ),
		array(
                        'c' => 'a4',
                        't' => 3
                ),
		array(
                        'c' => 'a5',
                        't' => 4
                ),
		array(
			'c' => 'end',
			't' => 0	
		)
	);

post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[0]);
post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[1]);
post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[2]);
post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[3]);
post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[4]);

post_without_wait('https://sistema.tagplus.com.br/scripts/vendedor.php/write_file.php', $data[5]);

echo 'End test';



