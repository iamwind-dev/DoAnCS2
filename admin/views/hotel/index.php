<?php
include('admin/views/shared/header.php');
?>
<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">

                <h1 class="text-30 lh-14 fw-600">Tất cả khách sạn</h1>
                <div class="text-15 text-light-1"></div>

            </div>

            <div class="col-auto">


                <a href="../../../admin.php?controller=hotel&amp;action=add"
                    class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Thêm Khách sạn
                </a>


            </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="tabs -underline-2 js-tabs">
                <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                    <div class="col-auto">
                        <button
                            class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1">Tất cả khách sạn</button>
                    </div>



                </div>

                <div class="tabs__content pt-30 js-tabs-content">

                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="overflow-scroll scroll-bar-1">
                            <table class="table-4 -border-bottom col-12">
                                <thead class="bg-light-2">
                                    <tr>

                                        <th>STT</th>
                                        <th style="width: 400px">Tên Khách Sạn</th>
                                        <th style="width: 400px">Ảnh</th>
                                        <th style="width: 400px">Thông tin</th>
                                        <th style="width: 400px">Trạng Thái</th>
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
                                                <?php echo $element['hotel_name']; ?>
                                            </td>
                                            <td style="width: 400px">
                                                <img style="max-width: 200px; height: 150px; border-radius:10px;"
                                                    src="/public/img/hotels/<?php echo $element['hotel_image_url'] ?>" />
                                            </td>
                                            <td class=" fw-500">
                                                <b>Địa điểm: </b>
                                                <?php echo $element['hotel_location'] ?><br>
                                                <b>Địa chỉ: </b>
                                                <?php echo $element['hotel_address'] ?><br>
                                                <b>Số điện thoại: </b>
                                                <?php echo $element['hotel_phone'] ?><br>
                                                Giá:
                                                <span class=" py-4 px-10 text-center text-14 fw-500  text-red-2">
                                                    <?php echo number_format($element['hotel_price'], 0, ',', '.') . 'VND'; ?>
                                                </span>
                                            </td>
                                            <td class="text-black-1 fw-500">
                                                <?php if ($element['hotel_status_id'] == 2) { ?>
                                                    <span
                                                        class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                                        <?php echo $element['hotel_status']; ?>
                                                    </span>
                                                <?php }
                                                else if ($element['hotel_status_id'] == 1) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                                        <?php echo $element['hotel_status']; ?>
                                                        </span>
                                                <?php }
                                                else if ($element['hotel_status_id'] == 3) { ?>
                                                            <span
                                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                                                        <?php echo $element['hotel_status']; ?>
                                                            </span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <div class="row x-gap-10 y-gap-10 items-center">
                                                    <div class="col-auto">
                                                        <a
                                                            href="../../../admin.php?controller=hotel&amp;action=edit&amp;id=<?php echo $element['id'] ?>"><button
                                                                class="flex-center bg-light-2 rounded-4 size-35">
                                                                <i class="icon-edit text-16 text-light-1"></i>
                                                            </button>
                                                        </a>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a
                                                            href="../../../admin.php?controller=hotel&amp;action=delete&amp;id=<?php echo $element['id'] ?>"><button
                                                                class="flex-center bg-light-2 rounded-4 size-35">
                                                                <i class="icon-trash-2 text-16 text-light-1"></i>
                                                            </button></a>
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
                                                <a href='../../../admin.php?controller=hotel&acion=index&p=<?php echo $current_page - 1 ?> '
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
                                                                href="../../../admin.php?controller=hotel&acion=index&p=<?php echo $i ?> ">
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
                                            <a href='../../../admin.php?controller=hotel&acion=index&p=<?php echo $current_page + 1 ?> '
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