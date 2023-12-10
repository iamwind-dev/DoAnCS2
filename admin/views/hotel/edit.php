<?php include('/DA/admin/views/shared/header.php') ?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">

                <h1 class="text-30 lh-14 fw-600">Sửa Thông tin Khách sạn</h1>
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
                            data-tab-target=".-tab-item-1">Nội dung</button>
                    </div>
                </div>
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <?php
                            foreach ($data as $element) { ?>
                                <form id="myform" action="../../../admin.php?controller=hotel&amp;action=edit" method="post"
                                    enctype="multipart/form-data">
                                    <input type="text" name="id" value="<?php echo $element['id'] ?>" hidden>
                                    <div class="text-18 fw-500 mb-10">Tên Hotel</div>
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-12">
                                            <div class="form-input ">
                                                <input name="tenks" type="text" required
                                                    value="<?php echo $element['hotel_name']; ?>">
                                                <label class="lh-1 text-16 text-light-1">Tên Hotel</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-18 fw-500 mb-10">Địa Chỉ</div>
                                            <div class="form-input ">
                                                <input name="diachi" type="text"
                                                    value="<?php echo $element['hotel_address']; ?>">
                                                <label class="lh-1 text-16 text-light-1">Địa Chỉ</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Địa Điểm</div>
                                                <div class="form-input ">
                                                    <select name="diadiem" id="select1">
                                                        <option id="op1"
                                                            value="<?php echo $element['hotel_location_id'] . '-' . $element['hotel_location']; ?>">
                                                            <?php echo $element['hotel_location']; ?>
                                                        </option>
                                                        <?php foreach ($data1 as $element1) { ?>
                                                            <option id="op1"
                                                                value="<?php echo $element1['id'] . '-' . $element1['location_name']; ?>">
                                                                <?php echo $element1['location_name']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Trạng Thái </div>
                                                <div class="form-input ">
                                                    <select name="trangthai" id="select1">
                                                        <option id="op1"
                                                            value="<?php echo $element['hotel_status_id'] . '-' . $element['hotel_status']; ?>">
                                                            <?php echo $element['hotel_status']; ?>
                                                        </option>
                                                        <?php foreach ($data2 as $element1) { ?>
                                                            <option id="op1"
                                                                value="<?php echo $element1['id'] . '-' . $element1['hotel_status']; ?>">
                                                                <?php echo $element1['hotel_status']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Số điện thoại liên hệ</div>
                                                <div class="form-input ">
                                                    <input name="sdt" type="text"
                                                        value="<?php echo $element['hotel_phone']; ?>">
                                                    <label class="lh-1 text-16 text-light-1">Số điện thoại liên hệ</label>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Giá</div>
                                                <div class="form-input ">
                                                    <input name="gia" type="text" required
                                                        value="<?php echo $element['hotel_price']; ?>">
                                                    <label class="lh-1 text-16 text-light-1">Giá</label>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="text-18 fw-500 mb-10">Tiện ích khách sạn</div>
                                    
                                        <div class="col-12">
                                            <div class="form-input ">
                                                <input name="tienich" type="text" required
                                                    value="<?php echo $element['hotel_amenities']; ?>">
                                                    <label class="lh-1 text-16 text-light-1">Tiện ích khách sạn</label>
                                                </div>
                                            </div>

                                        
                                        <div class="col-12">
                                            <div class="text-18 fw-500 mb-10">Mô tả Khách sạn</div>
                                            <div class="form-input ">
                                                <textarea name="mota" id="editor" value="">
                                                        <?php echo $element['hotel_description']; ?>    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-18 fw-500 mb-10">Giới thiệu tour</div>
                                        <div class="form-input ">
                                            <textarea name="gioithieu" id="editor1"
                                                value=""> <?php echo $element['hotel_introduction']; ?>       </textarea>
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
                                                <img src="../../../public/img/hotels/<?php echo $element['hotel_image_url']; ?>"
                                                    alt="">
                                            </div>
                                            <button type="button" class="select-image">Chọn Ảnh</button>
                                        </div>
                                    </div>
                                    <input type="text" name="image" id="" value="<?php echo $element['hotel_image_url']; ?>"
                                        hidden>
                                    <div class="d-inline-block pt-30">
                                        <input style="width:10% !important"type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                                            value="Lưu" form="myform">
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