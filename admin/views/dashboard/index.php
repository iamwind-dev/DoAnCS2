<?php include('admin/views/shared/header.php') ?>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                    <div class="col-auto">

                        <h1 class="text-30 lh-14 fw-600">Tổng quan</h1>
                        

                    </div>

                    <div class="col-auto">

                    </div>
                </div>


                <div class="row y-gap-30">

                    <div class="col-xl-3 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-10">
                                    <div class="fw-500 lh-14">Chưa xử lí</div>
                                    <div class="text-26 lh-16 fw-600 mt-5"><?php echo $pending ?></div>
                                    <div class="text-15 lh-14 text-light-1 mt-5">Tổng số đơn chưa xử lí</div>
                                </div>

                                <div class="col-auto">
                                    <img src="public/img/dashboard/icons/1.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-10">
                                    <div class="fw-500 lh-14">Thu nhập</div>
                                    <div class="text-26 lh-16 fw-600 mt-5"><?php echo number_format($earning, 0, ',', '.') . 'VND'; ?></div>
                                    <div class="text-15 lh-14 text-light-1 mt-5">Tổng thu nhập</div>
                                </div>

                                <div class="col-auto">
                                    <img src="public/img/dashboard/icons/2.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-10">
                                    <div class="fw-500 lh-14">Đơn đặt tour</div>
                                    <div class="text-26 lh-16 fw-600 mt-5"><?php echo $total ?></div>
                                    <div class="text-15 lh-14 text-light-1 mt-5">Tổng số lượt đặt tour</div>
                                </div>

                                <div class="col-auto">
                                    <img src="public/img/dashboard/icons/3.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-10">
                                    <div class="fw-500 lh-14">Bình luận</div>
                                    <div class="text-26 lh-16 fw-600 mt-5"><?php echo $comment ?></div>
                                    <div class="text-15 lh-14 text-light-1 mt-5">Tổng số lượt bình luận</div>
                                </div>

                                <div class="col-auto">
                                    <img src="public/img/dashboard/icons/4.svg" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row y-gap-30 pt-20">
                    <div class="col-xl-7 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="d-flex justify-between items-center">
                                <h2 class="text-18 lh-1 fw-500">
                                    Đơn đặt gần đây
                                </h2>

                                <div class="">
                                    <a href="/admin.php?controller=booking" class="text-14 text-blue-1 fw-500 underline">Xem tất cả</a>
                                </div>
                            </div>

                            <div class="overflow-scroll scroll-bar-1 pt-30">
                                <table class="table-2 col-12">
                                    <thead class="">
                                        <tr>
                                            <th>#</th>
                                            <th>Tour</th>
                                            <th>Tổng giá</th>
                                            
                                            <th>Trạng thái</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $count = 0;
                            foreach ($tour as $e){ ?>
                                        <tr>
                                            <td>#<?php  echo ++$count ?></td>
                                            <td><?php 
                                                $a=get_a_record('tour',$e['tour_id']);
                                            foreach($a as $b){
                                                echo $b['tour_name'];
                                            }  ?></td>
                                            <td class="fw-500"><?php echo number_format($e['total'], 0, ',', '.') . 'VND'; ?></td>
                                            
                                            <td>
                                                
                                                    <?php if ($e['status_id'] == 5) { ?>
                                                    <span
                                                        class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                                        <?php echo $e['booktour_status']; ?>
                                                    </span>
                                                <?php }
                                                else if ($e['status_id'] == 1) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-light-1 text-light-2">
                                                        <?php echo $e['booktour_status']; ?>
                                                        </span>
                                                <?php }
                                                else if ($e['status_id'] == 4) { ?>
                                                            <span
                                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                                                        <?php echo $e['booktour_status']; ?>
                                                            </span>
                                                <?php }else if ($e['status_id'] == 2) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                                        <?php echo $e['booktour_status']; ?>
                                                        </span><?php }
                                                else if ($e['status_id'] == 3) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-success-2 text-light-2   ">
                                                        <?php echo $e['booktour_status']; ?>
                                                        </span> <?php }?></div>
                                            </td>
                                            <td><?php echo $e['date'] ?></td>
                                        </tr>
                                    <?php } ?>
                                        

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-5 col-md-6">
                        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                            <div class="d-flex justify-between items-center">
                                <h2 class="text-18 lh-1 fw-500">
                                    Các tour nổi bật
                                </h2>
                                <div class="">
                                    <a href="/admin.php?controller=tour" class="text-14 text-blue-1 fw-500 underline">Xem tất cả</a>
                                </div>
                            </div>
                            <div class="overflow-scroll scroll-bar-1 pt-30">
                                <table class="table-2 col-12" id="myTable">
                                    <thead class="">
                                        <tr>
                                            <th>#</th>
                                            <th>Tour</th>
                                            <th>Số sao</th>
                                            
                                            <th>Số lượt đặt tour</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $count = 0;
                            foreach ($t as $e){ ?>
                                        <tr>
                                            <td>#<?php  echo ++$count ?></td>
                                            <td><?php 
                                                
                                                echo $e['tour_name'];
                                             ?></td>
                                            <td class="fw-500"><?php echo number_format($e['tour_star'], 1) ?></td>
                                            
                                            <td>
                                                
                                                    
                                            </td>
                                            <td ><?php echo select_total($e['id']);

                                            ?></td>
                                        </tr>
                                    <?php } ?>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <?php include('admin/views/shared/footer.php') ?>