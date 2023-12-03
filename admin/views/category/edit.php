<?php include('/DA/admin/views/shared/header.php') ?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Edit Categories</h1>
                <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>
            <div class="col-auto">
            </div>
        </div>
        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="tabs -underline-2 js-tabs">
                <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                    <div class="col-auto">
                        <button
                            class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1">1. Content</button>
                    </div>
                </div>
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <?php
                            foreach ($data as $element) { ?>
                            <form id="myform" action="../../../admin.php?controller=category&amp;action=edit"
                                method="post" enctype="multipart/form-data">
                                <div class="text-18 fw-500 mb-10">Tên Tour</div>
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-12">
                                        <div class="form-input ">

                                            <input name="tendm" type="text" required
                                                value="<?php echo $element['category_name'] ?>">
                                            <input name="id" type="text" required
                                                value="<?php echo $element['id'] ?>" hidden>
                                            <label class="lh-1 text-16 text-light-1">Tên Danh muc</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Trạng Thái</div>
                                            <div class="form-input ">
                                                <select name="trangthai" id="select1">
                                                    <option id="op1" value="a">a</option>
                                                    <option id="op1" value="b">b</option>
                                                    <option id="op1" value="c">c</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-18 fw-500 mb-10">Mô tả Danh muc</div>
                                    <div class="form-input ">
                                        <textarea name="mota" id="editor"><?php echo $element['category_description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="d-inline-block pt-30">
                                    <input type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white" value="Luu" form="myform">
                                    </input>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('/DA/admin/views/shared/footer.php') ?>