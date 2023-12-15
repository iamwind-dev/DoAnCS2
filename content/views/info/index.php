<?php
include("/DA/content/views/shared/headerhome.php");
?>
    <div class="dashboard -is-sidebar-open" data-x="dashboard"data-x-toggle="-is-sidebar-open">
<?php foreach ($a as $u) { ?>
        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                    <div class="col-auto">

                        <h1 class="text-30 lh-14 fw-600">Thông tin người dùng</h1>
                        <div class="text-15 text-light-1"></div>

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
                                    data-tab-target=".-tab-item-1">Thông tin cá nhân</button>
                            </div>

                            

                            <!-- <div class="col-auto">
                                <button
                                    class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                                    data-tab-target=".-tab-item-3">Đổi mật khẩu</button>
                            </div> -->

                        </div>

                        <div class="tabs__content pt-30 js-tabs-content">
                            <form id="myform" action="../../../index.php?controller=info&action=edit" method="post"
                                    enctype="multipart/form-data">
                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <div class="row y-gap-30 items-center">
                                    

                                    <div class="col-auto">
                                        <input type="text" hidden name="id" value="<?php echo $u['id']; ?>">
                                        <h4 class="text-16 fw-500">Avatar</h4>
                                        


<div class="mt-30">
                                        
                                        <div class="containerr">
                                            <input type="file" name="file" id="file" accept="image/*" hidden>
                                            <div class="img-area" data-img="">
                                                <i class='bx bxs-cloud-upload icon'></i>
                                                <h3>Upload Image</h3>
                                                <p>Image size must be less than <span>2MB</span></p>
                                                <img style="border-radius:50%;"src="../../../public/img/avatars/<?php echo $u['user_avatar']; ?>" alt="">
                                                
        </div>
        <button type="button" class="select-image button h-50 px-24 -dark-1 bg-blue-1 text-white"><i class="icon-upload-file text-20 mr-10"></i>Chọn Ảnh</button>
    </div>
</div>



                                    </div>
                                </div>

                                <div class="border-top-light mt-30 mb-30"></div>

                                <div class="col-xl-9">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-12">

                                            <div class="form-input ">
                                                <input name ="ten" type="text" value="<?php echo $u['user_name']; ?>"required>
                                                <input type="text" name="image" value="<?php echo $u['user_avatar']; ?>" hidden>
                                                    <label class="lh-1 text-16 text-light-1">Tên</label>
                                                </div>

                                            </div>

                                        

                                        

                                        

                                            <div class="col-md-6">

                                                <div class="form-input ">
                                                    <input name="email" type="text" value="<?php echo $u['user_email']; ?>" required>
                                                <label class="lh-1 text-16 text-light-1">Email</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-input ">
                                                <input name="sdt" value="<?php echo $u['user_phone']; ?>" type="text" required>
                                                <label class="lh-1 text-16 text-light-1">SĐT</label>
                                            </div>

                                        </div>

                                        


                                    </div>
                                </div>

                                <div class="d-inline-block pt-30">

                                    <input type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                                            value="Lưu" form="myform">
                                        </input>
</form>
                                </div>
                            </div>

                        

                            <!-- <div class="tabs__pane -tab-item-3">
                                <div class="col-xl-9">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-12">

                                            <div class="form-input ">
                                                <input type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Mật Khẩu cũ</label>
                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-input ">
                                                <input type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Mật khẩu mới</label>
                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-input ">
                                                <input type="text" required>
                                                <label class="lh-1 text-16 text-light-1">Nhập lại mật khẩu mới</label>
                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <div class="row x-gap-10 y-gap-10">
                                                <div class="col-auto">

                                                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                                        Lưu <div class="icon-arrow-top-right ml-15"></div>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        

<?php }
include("/DA/content/views/shared/footer.php");
 ?>