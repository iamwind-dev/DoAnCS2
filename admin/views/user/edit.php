<?php include('/DA/admin/views/shared/header.php') ?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Thông tin người dùng</h1>
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
                            data-tab-target=".-tab-item-1">Chỉnh sửa</button>
                    </div>
                </div>
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <?php
                            foreach ($data as $element) { ?>
                            <form id="myform" action="../../../admin.php?controller=user&amp;action=edit"
                                method="post" enctype="multipart/form-data">
                                <div class="text-18 fw-500 mb-10">Họ và tên</div>
                                
                                <div class="col-12">
                                    
                                            <div class="form-input ">
                                                <input name="id" type="text" required
                                                    value="<?php echo $element['id']; ?>" hidden >
                                                    <input name="ten" type="text" required
                                                        value="<?php echo $element['user_name']; ?>">
                                                <label class="lh-1 text-16 text-light-1">Họ và tên</label>
                                            </div>
                                    </div>

                                    <div class="text-18 fw-500 mb-10">Email</div>
                                
                                <div class="col-12">
                                    
                                            <div class="form-input ">
                                                <input name="email" type="text" required
                                                    value="<?php echo $element['user_email']; ?>">
                                                <label class="lh-1 text-16 text-light-1">Email</label>
                                            </div>
                                        </div>

                                        <div class="text-18 fw-500 mb-10">SĐT</div>
                                
                                <div class="col-12">
                                    
                                            <div class="form-input ">
                                                <input name="sdt" type="text" required
                                                    value="<?php echo $element['user_phone']; ?>">
                                                    <label class="lh-1 text-16 text-light-1">SĐT</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Vai Trò</div>
                                                <div class="form-input ">
                                                    <select name="vaitro" id="select1">
                                                        <option id="op1"
                                                            value="<?php echo $element['role_id'].'-'.$element['user_role']; ?>">
                                                                    <?php echo $element['user_role']; ?>
                                                                </option>
                                                                <?php foreach($data1 as $element1) { ?>
                                                                    <option id="op1" value="<?php echo $element1['id'].'-'.$element1['role_name']; ?>">
                                                                        <?php echo $element1['role_name']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="col-5">
                                                <div class="text-18 fw-500 mb-10">Trạng Thái </div>
                                                <div class="form-input ">
                                                    <select name="trangthai" id="select2">
                                                        <option id="op1"
                                                            value="<?php echo $element['user_status_id'].'-'.$element['user_status']; ?>">
                                                                    <?php echo $element['user_status']; ?>
                                                                </option>
                                                                <?php foreach($data2 as $element1) { ?>
                                                                    <option id="op1" value="<?php echo $element1['id'].'-'.$element1['status_name']; ?>">
                                                                        <?php echo $element1['status_name']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-30">
                                        <div class="fw-500">avatar</div>
                                        <div class="containerr">
                                            <input type="file" name="file" id="file" accept="image/*" hidden>
                                            <div style="margin-left:50px;border-radius:300px;width:70% !important" class="img-area" data-img="">
                                                <i class='bx bxs-cloud-upload icon'></i>
                                                <h3>Upload Image</h3>
                                                <p>Image size must be less than <span>2MB</span></p>
                                                <img style="border-radius:50px !important" src="../../../public/img/avatars/<?php echo $element['user_avatar']; ?>" alt="">
                                                            </div>
                                                            <button type="button" class="select-image">Select Image</button>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="avatar" id="" value="<?php echo $element['user_avatar']; ?>" hidden>
                                                        <div class="d-inline-block pt-30">
                                                            <input type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white" value="Lưu" form="myform">
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