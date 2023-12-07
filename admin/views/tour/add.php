<?php include('/DA/admin/views/shared/header.php') ?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Add Tours</h1>
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
                            data-tab-target=".-tab-item-1">Content</button>
                    </div>
                </div>
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <form id="myform" action="../../../admin.php?controller=tour&amp;action=add" method="post"
                                enctype="multipart/form-data">
                                <div class="text-18 fw-500 mb-10">Tên Tour</div>
                                <div class="row x-gap-20 y-gap-20">
                                    <div class="col-12">
                                        <div class="form-input ">
                                            <input name="tentour" type="text" required>
                                            <label class="lh-1 text-16 text-light-1">Tên Tour</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Địa Điểm</div>
                                            <div class="form-input ">
                                                <select name="diadiem" id="select1">
                                                    <?php foreach ($data as $element) { ?>
                                                        <option id="op1"
                                                            value="<?php echo $element['id'] . '-' . $element['location_name']; ?>">
                                                            <?php echo $element['location_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Trạng Thái</div>
                                            <div class="form-input ">
                                                <select name="trangthai" id="select1">
                                                    <?php foreach ($data1 as $element) { ?>
                                                        <option id="op1"
                                                            value="<?php echo $element['id'] . '-' . $element['status_name']; ?>">
                                                            <?php echo $element['status_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Số lượng người tham gia</div>
                                            <div class="form-input ">
                                                <input name="sltg" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Số lượng người tham gia</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Giá</div>
                                            <div class="form-input ">
                                                <input name="gia" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Giá</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Phương tiện di chuyển</div>
                                            <div class="form-input ">
                                                <input name="phuongtien" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Phương tiện di
                                                    chuyển</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Địa điểm xuất phát</div>
                                            <div class="form-input ">
                                                <input name="diemxp" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Địa Điểm xuất
                                                    phát</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Hành trình:</div>
                                            <div class="form-input ">
                                                <input name="hanhtrinh" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Hành trình</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Lịch Trình</div>
                                            <div class="form-input ">
                                                <input name="lichtrinh" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Địa Điểm xuất
                                                    phát</label>
                                            </div>


                                        </div>



                                    </div>

                                    <div class="row">
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Ngày bắt đầu:</div>
                                                <div class="form-input ">
                                                    <input name="batdau" type="date" required
                                                        value="">
                                                <label class="lh-1 text-16 text-light-1">Ngày bắt đầu</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-18 fw-500 mb-10">Ngày kết thúc:</div>
                                            <div class="form-input ">
                                                <input name="ketthuc" type="date" value="">
                                                <label class="lh-1 text-16 text-light-1">Ngày kết thúc</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div class="col-12">
                                    <div class="text-18 fw-500 mb-10">Mô tả tour</div>
                                    <div class="form-input ">
                                        <textarea name="mota" id="editor"></textarea>

                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="text-18 fw-500 mb-10">Giới thiệu tour</div>
                                    <div class="form-input ">
                                        <textarea name="gioithieu" id="editor1"></textarea>

                                    </div>

                                </div>

                                <div class="mt-30">
                                    <div class="fw-500">Hình ảnh</div>

                                    <div class="containerr">
                                        <input type="file" name="file" id="file" accept="image/*" hidden>
                                        <div class="img-area" data-img="">
                                            <i class='bx bxs-cloud-upload icon'></i>
                                            <h3>Upload Image</h3>
                                            <p>Image size must be less than <span>2MB</span></p>
                                        </div>
                                        <button type="button" class="select-image">Select Image</button>
                                    </div>
                                </div>
                                <div class="d-inline-block pt-30">
                                    <input type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                                        value="Thêm" form="myform">

                                    </input>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('/DA/admin/views/shared/footer.php') ?>