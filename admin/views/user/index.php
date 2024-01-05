<?php
include('admin/views/shared/header.php');
?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Tài khoản Người Dùng</h1>
                <div class="text-15 text-light-1">

                </div>
            </div>


        </div>

        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="tabs -underline-2 js-tabs">
                <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                    <div class="col-auto">
                        <button
                            class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1">
                            Tất cả tài khoản
                        </button>
                    </div>
                </div>

                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="overflow-scroll scroll-bar-1">
                            <table class="table-4 -border-bottom col-12">
                                <thead class="bg-light-2">
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ và Tên</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <th>Vai trò</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 0;
                                    foreach ($data as $element) { ?>

                                        <tr>
                                            <td>
                                                <?php echo ++$a; ?>
                                            </td>
                                            <td class="text-blue-1 fw-500">
                                                <?php echo $element['user_name'];
                                                ?>
                                            </td>
                                            <td style="width: 400px">
                                                <?php echo $element['user_email'] ?>
                                            </td>
                                            <td style="width: 500px; height: 150px">

                                                <?php echo $element['user_phone'] ?>

                                            </td>
                                            <td>
                                                <?php echo $element['user_role'] ?>
                                            </td>
                                            <td>

                                                <?php echo $element['user_status_id'] ?>

                                            </td>

                                            <td>
                                                <div class="row x-gap-10 y-gap-10 items-center">


                                                    <div class="col-auto">
                                                        <a
                                                            href="../../../admin.php?controller=user&amp;action=edit&amp;id=<?php echo $element['id']; ?>"><button
                                                                class="flex-center bg-light-2 rounded-4 size-35">
                                                                <i class="icon-edit text-16 text-light-1"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a
                                                            href="../../../admin.php?controller=user&amp;action=delete&amp;id=<?php echo $element['id']; ?>"><button
                                                                class="flex-center bg-light-2 rounded-4 size-35">
                                                                <i
                                                                    class="icon-trash-2 text-16 text-light-1"></i></button></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php if ($total_page > 1) { ?>
                                <div class="pt-30">
                                    <div class="row justify-between">
                                        <div class="col-auto">
                                            <?php if ($current_page > 1 && $total_page > 1) { ?>
                                                <a href='../../../admin.php?controller=user&acion=index&p=<?php echo $current_page - 1 ?> '
                                                    class="button -blue-1 size-40 rounded-full border-light">
                                                    <i class="icon-chevron-left text-12"></i>
                                                </a>
                                            <?php } ?>
                                        </div>

                                        <div class="col-auto">
                                            <div class="row x-gap-20 y-gap-20 items-center">
                                                <?php for ($i = 1; $i <= $total_page; $i++) {
                                                    if ($i == $current_page) { ?>
                                                        <div class="col-auto">

                                                            <a href="">
                                                                <div class="size-40 flex-center rounded-full bg-dark-1 text-white">
                                                                    <?php echo $i ?>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    <?php }
                                                    else { ?>
                                                        <div class="col-auto">
                                                            <a
                                                                href="../../../admin.php?controller=user&acion=index&p=<?php echo $i ?> ">
                                                                <div class="size-40 flex-center rounded-full">
                                                                    <?php echo $i ?>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    <?php }
                                                } ?>




                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <a href='../../../admin.php?controller=user&acion=index&p=<?php echo $current_page + 1 ?> '
                                                class="button -blue-1 size-40 rounded-full border-light">
                                                <i class="icon-chevron-right text-12"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('admin/views/shared/footer.php') ?>
    </div>
</div>