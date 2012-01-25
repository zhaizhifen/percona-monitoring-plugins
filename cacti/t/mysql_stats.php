<?php
require('test-more.php');
require('../scripts/ss_get_mysql_stats.php');
$debug = true;

is(
   make_bigint('0', '1170663853'),
   '1170663853',
   'make_bigint 0 1170663853'
);

is(
   make_bigint('1', '504617703'),
   '4799584999',
   'make_bigint 1 504617703'
);

is(
   make_bigint('EF861B144C'),
   '1028747105356',
   'make_bigint EF861B144C'
);

is(
   big_sub('74900191315', '1170664159'),
   '73729527156',
   'big_sub 1170664159 74900191315'
);

is(
   big_sub('74900191315', '1170664159', 'something else'),
   '73729527156',
   'big_sub 1170664159 74900191315 forced'
);

is(
   big_multiply('74900191315', '1170664159'),
   '87682969474713583616',
   'big_multiply 74900191315 and 1170664159'
);

is(
   big_multiply('74900191315', '1170664159', 'something else'),
   '87682969474713583616',
   'big_multiply 74900191315 and 1170664159 forced'
);

is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-001.txt')),
   array(
      'spin_waits'                => '8317256878',
      'spin_rounds'               => '247280272495',
      'os_waits'                  => '1962880678',
      'innodb_transactions'       => '1170664159',
      'unpurged_txns'             => '306',
      'history_list'              => '9',
      'current_transactions'      => '36',
      'pending_normal_aio_reads'  => '0',
      'pending_normal_aio_writes' => '0',
      'pending_ibuf_aio_reads'    => '1',
      'pending_aio_log_ios'       => '2',
      'pending_aio_sync_ios'      => '3',
      'pending_log_flushes'       => '0',
      'pending_buf_pool_flushes'  => '0',
      'file_reads'                => '5985113',
      'file_writes'               => '633045221',
      'file_fsyncs'               => '537534629',
      'ibuf_inserts'              => '19817685',
      'ibuf_merged'               => '19817684',
      'ibuf_merges'               => '3552620',
      'log_bytes_written'         => '540805326864',
      'unflushed_log'             => '0',
      'log_bytes_flushed'         => '540805326864',
      'pending_log_writes'        => '0',
      'pending_chkp_writes'       => '0',
      'log_writes'                => '520835887',
      'pool_size'                 => '720896',
      'free_pages'                => '0',
      'database_pages'            => '638423',
      'modified_pages'            => '118',
      'pages_read'                => '28593890',
      'pages_created'             => '5375161',
      'pages_written'             => '154670836',
      'queries_inside'            => '0',
      'queries_queued'            => '0',
      'read_views'                => '1',
      'rows_inserted'             => '544159502',
      'rows_updated'              => '355138902',
      'rows_deleted'              => '50580680',
      'rows_read'                 => '1911833505287',
      'hash_index_cells_total'    => '23374853',
      'hash_index_cells_used'     => '21238151',
      'total_mem_alloc'           => '13102052218',
      'additional_pool_alloc'     => '1048576',
      'last_checkpoint'           => '540805205461',
      'uncheckpointed_bytes'      => '121403',
      'ibuf_used_cells'           => '1',
      'ibuf_free_cells'           => '4634',
      'ibuf_cell_count'           => '4636',
      'adaptive_hash_memory'      => '1538240664',
      'page_hash_memory'          => '11688584',
      'dictionary_cache_memory'   => '145525560',
      'file_system_memory'        => '313848',
      'lock_system_memory'        => '29232616',
      'recovery_system_memory'    => '1',
      'thread_hash_memory'        => '409336',
      'innodb_io_pattern_memory'  => '1',
      'innodb_sem_waits'          => NULL,
      'innodb_sem_wait_time_ms'   => NULL,
   ),
   'samples/innodb-001.txt'
);

is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-002.txt')),
   array(
      'spin_waits'                => '88127914',
      'spin_rounds'               => '157459864',
      'os_waits'                  => '4329779',
      'pending_normal_aio_reads'  => '1',
      'pending_normal_aio_writes' => '2',
      'pending_ibuf_aio_reads'    => '1',
      'pending_aio_log_ios'       => '2',
      'pending_aio_sync_ios'      => '3',
      'pending_log_flushes'       => '1',
      'pending_buf_pool_flushes'  => '2',
      'file_reads'                => '8782182',
      'file_writes'               => '15635445',
      'file_fsyncs'               => '947800',
      'ibuf_inserts'              => '17549044',
      'ibuf_merged'               => '15956910',
      'ibuf_merges'               => '1676050',
      'log_bytes_written'         => '13093949495856',
      'unflushed_log'             => '1276529',
      'log_bytes_flushed'         => '13093948219327',
      'pending_log_writes'        => '1',
      'pending_chkp_writes'       => '2',
      'log_writes'                => '3430041',
      'pool_size'                 => '1769471',
      'free_pages'                => '1',
      'database_pages'            => '1696503',
      'modified_pages'            => '160602',
      'pages_read'                => '15240822',
      'pages_created'             => '1770238',
      'pages_written'             => '21705836',
      'queries_inside'            => '1',
      'queries_queued'            => '2',
      'read_views'                => '1',
      'rows_inserted'             => '50678311',
      'rows_updated'              => '66425915',
      'rows_deleted'              => '20605903',
      'rows_read'                 => '454561562',
      'innodb_transactions'       => '1028747105356',
      'unpurged_txns'             => '1026497183983',
      'history_list'              => '132',
      'current_transactions'      => '2',
      'hash_index_cells_total'    => '57374437',
      'hash_index_cells_used'     => 0,
      'total_mem_alloc'           => '29642194944',
      'additional_pool_alloc'     => '0',
      'last_checkpoint'           => '13093217877062',
      'uncheckpointed_bytes'      => '731618794',
      'ibuf_used_cells'           => '10204',
      'ibuf_free_cells'           => '157151',
      'ibuf_cell_count'           => '167356',
      'adaptive_hash_memory'      => '1654507416',
      'page_hash_memory'          => '28688008',
      'dictionary_cache_memory'   => '116312344',
      'file_system_memory'        => '172560',
      'lock_system_memory'        => '71719560',
      'recovery_system_memory'    => '0',
      'thread_hash_memory'        => '407576',
      'innodb_sem_waits'          => NULL,
      'innodb_sem_wait_time_ms'   => NULL,
   ),
   'samples/innodb-002.txt'
);

is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-006.txt')),
   array(
      'spin_waits'                => '31',
      'spin_rounds'               => '220',
      'os_waits'                  => '17',
      'innodb_transactions'       => '3411',
      'unpurged_txns'             => '11',
      'history_list'              => '19',
      'current_transactions'      => '2',
      'active_transactions'       => '2',
      'innodb_tables_in_use'      => '1',
      'innodb_locked_tables'      => '1',
      'locked_transactions'       => 1,
      'innodb_lock_structs'       => '9',
      'pending_normal_aio_reads'  => '0',
      'pending_normal_aio_writes' => '0',
      'pending_ibuf_aio_reads'    => '0',
      'pending_aio_log_ios'       => '0',
      'pending_aio_sync_ios'      => '0',
      'pending_log_flushes'       => '0',
      'pending_buf_pool_flushes'  => '0',
      'file_reads'                => '42',
      'file_writes'               => '168',
      'file_fsyncs'               => '149',
      'ibuf_inserts'              => '0',
      'ibuf_merged'               => '0',
      'ibuf_merges'               => '0',
      'log_bytes_written'         => '103216',
      'unflushed_log'             => '0',
      'log_bytes_flushed'         => '103216',
      'pending_log_writes'        => '0',
      'pending_chkp_writes'       => '0',
      'log_writes'                => '72',
      'pool_size'                 => '512',
      'free_pages'                => '476',
      'database_pages'            => '35',
      'modified_pages'            => '0',
      'pages_read'                => '33',
      'pages_created'             => '48',
      'pages_written'             => '148',
      'queries_inside'            => '0',
      'queries_queued'            => '0',
      'read_views'                => '2',
      'rows_inserted'             => '5',
      'rows_updated'              => '0',
      'rows_deleted'              => '0',
      'rows_read'                 => '10',
      'innodb_lock_wait_secs'     => '32',
      'hash_index_cells_total'    => '17393',
      'hash_index_cells_used'     => '0',
      'total_mem_alloc'           => '20557306',
      'additional_pool_alloc'     => '744704',
      'last_checkpoint'           => '103216',
      'uncheckpointed_bytes'      => '0',
      'ibuf_used_cells'           => '1',
      'ibuf_free_cells'           => '0',
      'ibuf_cell_count'           => '2',
      'adaptive_hash_memory'      => NULL,
      'page_hash_memory'          => NULL,
      'dictionary_cache_memory'   => NULL,
      'file_system_memory'        => NULL,
      'lock_system_memory'        => NULL,
      'recovery_system_memory'    => NULL,
      'thread_hash_memory'        => NULL,
      'innodb_sem_waits'          => NULL,
      'innodb_sem_wait_time_ms'   => NULL,
   ),
   'samples/innodb-006.txt'
);

is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-009.txt')),
   array(
      'spin_waits'                => '820880',
      'spin_rounds'               => '3373874',
      'os_waits'                  => '32601',
      'pending_normal_aio_reads'  => '0',
      'pending_normal_aio_writes' => '0',
      'pending_ibuf_aio_reads'    => '0',
      'pending_aio_log_ios'       => '0',
      'pending_aio_sync_ios'      => '0',
      'pending_log_flushes'       => '0',
      'pending_buf_pool_flushes'  => '0',
      'file_reads'                => '1516536',
      'file_writes'               => '268607',
      'file_fsyncs'               => '27641',
      'ibuf_used_cells'           => '9909',
      'ibuf_free_cells'           => '36366',
      'ibuf_cell_count'           => '46276',
      'ibuf_inserts'              => '403495',
      'ibuf_merged'               => '391709',
      'ibuf_merges'               => '94372',
      'hash_index_cells_total'    => '24902177',
      'hash_index_cells_used'     => '12151667',
      'log_bytes_written'         => '541333186407',
      'log_bytes_flushed'         => '541333186407',
      'last_checkpoint'           => '541046660013',
      'pending_log_writes'        => '0',
      'pending_chkp_writes'       => '0',
      'log_writes'                => '19521',
      'total_mem_alloc'           => '13711864112',
      'additional_pool_alloc'     => '5884416',
      'pool_size'                 => '768000',
      'free_pages'                => '60',
      'database_pages'            => '743356',
      'modified_pages'            => '177204',
      'pages_read'                => '1580077',
      'pages_created'             => '7462',
      'pages_written'             => '276034',
      'queries_inside'            => '3',
      'queries_queued'            => '0',
      'rows_inserted'             => '430539',
      'rows_updated'              => '251931',
      'rows_deleted'              => '257631',
      'rows_read'                 => '83306576',
      'innodb_transactions'       => '4106483684',
      'unpurged_txns'             => '1293',
      'current_transactions'      => '23',
      'active_transactions'       => '21',
      'unflushed_log'             => '0',
      'uncheckpointed_bytes'      => '286526394',
      'read_views'                => NULL,
      'history_list'              => NULL,
      'adaptive_hash_memory'      => NULL,
      'page_hash_memory'          => NULL,
      'dictionary_cache_memory'   => NULL,
      'file_system_memory'        => NULL,
      'lock_system_memory'        => NULL,
      'recovery_system_memory'    => NULL,
      'thread_hash_memory'        => NULL,
      'innodb_sem_waits'          => NULL,
      'innodb_sem_wait_time_ms'   => NULL,
   ),
   'samples/innodb-009.txt'
);

/* TODO: I am not sure anymore what this file is meant to test.  Got pulled away
 * in the midst of working on it, now can't remember what I was doing.
is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-014.txt')),
   array(
      'spin_waits'                => '335',
      'spin_rounds'               => '1682',
      'os_waits'                  => '210',
      'pending_normal_aio_reads'  => '0',
      'pending_normal_aio_writes' => '0',
      'pending_ibuf_aio_reads'    => '0',
      'pending_aio_log_ios'       => '0',
      'pending_aio_sync_ios'      => '0',
      'pending_log_flushes'       => '0',
      'pending_buf_pool_flushes'  => '0',
      'file_reads'                => '2158',
      'file_writes'               => '1530',
      'file_fsyncs'               => '992',
      'ibuf_inserts'              => '6',
      'ibuf_merged'               => '6',
      'ibuf_merges'               => '6',
      'log_bytes_written'         => '3068940702',
      'unflushed_log'             => '0',
      'log_bytes_flushed'         => '3068940702',
      'pending_log_writes'        => '0',
      'pending_chkp_writes'       => '0',
      'log_writes'                => '686',
      'pool_size'                 => '16000',
      'free_pages'                => '13771',
      'database_pages'            => '2148',
      'modified_pages'            => '0',
      'pages_read'                => '2148',
      'pages_created'             => '0',
      'pages_written'             => '694',
      'queries_inside'            => '0',
      'queries_queued'            => '0',
      'read_views'                => '1',
      'rows_inserted'             => '169',
      'rows_updated'              => '336',
      'rows_deleted'              => '4',
      'rows_read'                 => '3713963',
      'innodb_transactions'       => '8799060',
      'unpurged_txns'             => '28',
      'history_list'              => '9',
      'current_transactions'      => '54',
      'hash_index_cells_total'    => '1155127',
      'hash_index_cells_used'     => '0',
      'total_mem_alloc'           => '288139706',
      'additional_pool_alloc'     => '2118912',
      'last_checkpoint'           => '3068940702',
      'uncheckpointed_bytes'      => '0',
      'ibuf_used_cells'           => '1',
      'ibuf_free_cells'           => '0',
      'ibuf_cell_count'           => '2',
      'adaptive_hash_memory'      => NULL,
      'page_hash_memory'          => NULL,
      'dictionary_cache_memory'   => NULL,
      'file_system_memory'        => NULL,
      'lock_system_memory'        => NULL,
      'recovery_system_memory'    => NULL,
      'thread_hash_memory'        => NULL,
   ),
   'samples/innodb-014.txt'
);
*/

is_deeply(
   get_innodb_array(file_get_contents('samples/innodb-015.txt')),
   array(
      'spin_waits'                => '134636510',
      'spin_rounds'               => '388647989',
      'os_waits'                  => '8556235',
      'pending_normal_aio_reads'  => '1',
      'file_reads'                => '11270830',
      'file_writes'               => '396961428',
      'file_fsyncs'               => '10365267',
      'ibuf_inserts'              => '20810519',
      'ibuf_merged'               => '20809068',
      'ibuf_merges'               => '3467306',
      'log_bytes_written'         => '1022011878586',
      'unflushed_log'             => '3960491',
      'log_bytes_flushed'         => '1022007918095',
      'log_writes'                => '172229872',
      'pool_size'                 => '2621440',
      'free_pages'                => '0',
      'database_pages'            => '2158986',
      'modified_pages'            => '10421',
      'pages_read'                => '11286955',
      'pages_created'             => '972067',
      'pages_written'             => '238644796',
      'read_views'                => '7',
      'rows_inserted'             => '175281166',
      'rows_updated'              => '0',
      'rows_deleted'              => '175454578',
      'rows_read'                 => '312925603',
      'innodb_transactions'       => '1825236616',
      'unpurged_txns'             => '9960',
      'history_list'              => '67',
      'current_transactions'      => '1',
      'hash_index_cells_total'    => '84999163',
      'total_mem_alloc'           => '43914362880',
      'additional_pool_alloc'     => '0',
      'last_checkpoint'           => '1022005836378',
      'uncheckpointed_bytes'      => '6042208',
      'ibuf_used_cells'           => '9',
      'ibuf_free_cells'           => '3061',
      'ibuf_cell_count'           => '3071',
      'innodb_tables_in_use'      => '0',
      'innodb_locked_tables'      => '0',
      'active_transactions'       => '0',
      'innodb_lock_structs'       => '0',
      'innodb_sem_waits'          => '671',
      'innodb_sem_wait_time_ms'   => '647000',
      'pending_normal_aio_writes' => '0',
      'pending_ibuf_aio_reads'    => '0',
      'pending_aio_log_ios'       => '0',
      'pending_aio_sync_ios'      => '0',
      'pending_log_flushes'       => '0',
      'pending_buf_pool_flushes'  => '0',
      'pending_log_writes'        => '0',
      'pending_chkp_writes'       => '0',
      'queries_inside'            => '0',
      'queries_queued'            => '0',
      'hash_index_cells_used'     => '0',
      'adaptive_hash_memory'      => NULL,
      'page_hash_memory'          => NULL,
      'dictionary_cache_memory'   => NULL,
      'file_system_memory'        => NULL,
      'lock_system_memory'        => NULL,
      'recovery_system_memory'    => NULL,
      'thread_hash_memory'        => NULL,

      ),
   'samples/innodb-015.txt'
);

?>