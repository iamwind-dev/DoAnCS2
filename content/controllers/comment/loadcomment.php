<?php
include('lib/config/database.php');
include('lib/functions.php');
include('content/models/tour.php');
include('content/models/comment.php');
$offset = $_POST['offset'];
$limit = $_POST['limit'];
$idt = $_POST['idt'];
$total_comment = get_total_comment('comment', $idt);
$sql = "SELECT * FROM comment WHERE tour_id = $idt ORDER BY time DESC LIMIT $offset, $limit";
$result = mysqli_query($conn, $sql);

$data = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_free_result($result);
}

$output = '';
foreach ($data as $b) {
    $data3 = showUser($b['user_id']);
    foreach ($data3 as $c) {
        $output .= '<div class="col-12">';
        $output .= '<div class="row x-gap-20 y-gap-20 items-center">';
        $output .= '<div class="col-auto">';
        $output .= '<img style="width:50px; border-radius:50%" src="../../../public/img/avatars/' . $c['user_avatar'] . '" alt="image" />';
        $output .= '</div>';
        $output .= '<div class="col-auto">';
        $output .= '<div class="fw-500 lh-15">' . $c['user_name'] . '</div>';
        $output .= '<div class="text-14 text-light-1 lh-15">' . TimeAgo($b['time']) . '</div>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '<p class="text-15 text-dark-1 mt-10">' . $b['comment'] . '</p>';
        $output .= '</div>';

    }
}
echo $output;

