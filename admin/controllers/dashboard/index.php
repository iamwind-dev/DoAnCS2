<?php
include_once('lib/models.php');
include('admin/models/dashboard.php');
$total = get_total('book_tour');
$comment= get_total('comment');
$pending= get_total_id('book_tour',1,'status_id');
$earning=get_total_earning();
$tour = select_recent_book_tour();
$t = select_tour();
include('admin/views/dashboard/index.php');
