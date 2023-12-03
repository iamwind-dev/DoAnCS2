<?php
include('/DA/admin/views/shared/header.php');
?>
<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">

                <h1 class="text-30 lh-14 fw-600">All Hotels</h1>
                <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

            </div>

            <div class="col-auto">


                <a href="../../../admin.php?controller=hotel&amp;action=add"
                    class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Add Hotel<div class="icon-arrow-top-right ml-15"></div>
                </a>


            </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="tabs -underline-2 js-tabs">
                <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                    <div class="col-auto">
                        <button
                            class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1">All Location</button>
                    </div>



                </div>

                <div class="tabs__content pt-30 js-tabs-content">

                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="overflow-scroll scroll-bar-1">
                            <table class="table-4 -border-bottom col-12">
                                <thead class="bg-light-2">
                                    <tr>

                                        <th>STT</th>
                                        <th>Name</th>
                                        <th style="width: 400px">Image</th>
                                        <th style="width: 400px">Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                        <img style="max-width: 200px; height: 150px"
                          src="/public/img/hotels/<?php echo $element['hotel_image_url'] ?>" />
                                                </td>
                                                <td class="text-blue-1 fw-500">
                                                <?php echo $element['hotel_price']; ?>
                                                    </td>
                                                    <td class="text-black-1 fw-500">
                                                <?php echo $element['hotel_status']; ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('/DA/admin/views/shared/footer.php') ?>