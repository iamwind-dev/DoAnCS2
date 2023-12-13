<?php
require_once('/DA/lib/config/database.php');
require_once('/DA/lib/models.php');

$result = get_total('tour');

$total_records = $result;
$current_page = isset($_GET['p']) ? $_GET['p'] : 1;
$limit = 3;
$total_page = ceil($total_records / $limit);
if ($current_page > $total_page) {
    $current_page = $total_page;
}
else if ($current_page < 1) {
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

$sql = 'SELECT * from sanpham LIMIT ' . $start . ', ' . $limit;
$kq = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($kq)) {
    echo '<tr>';
    echo '<td><a href="chitietsp.php?idsp=' . $row['id'] . '">' . $row['tensp'] . '</a></td>';
    echo '<td> ' . number_format($row['Gia'], 3) . ' VND</td>';
    echo '<td>' . $row['Soluong'] . '</td>';
    echo '<td> <img src="uploads/' . $row['hinhanh'] . '"/></td>';
    echo '<td><a href="xoasp.php?idsp=' . $row['id'] . '">Xóa</a></td>';
    echo '<td><a href="suasp.php?idsp=' . $row['id'] . '">Sửa</a></a></td>';
    echo '</tr>';
}
?>
</tbody>
</table>
<?php
if ($current_page > 1 && $total_page > 1) {
    echo '<a href="danhsachsanpham1.php?p=' . ($current_page - 1) . '">Trước</a> | ';
}

for ($i = 1; $i <= $total_page; $i++) {
    if ($i == $current_page) {
        echo '<b>' . $i . '</b> | ';
    }
    else {
        echo '<a href="danhsachsanpham1.php?p=' . $i . '">' . $i . '</a> | ';
    }
}
?>