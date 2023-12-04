<footer class="footer -dashboard mt-60">
    <div class="footer__row row y-gap-10 items-center justify-between">
        <div class="col-auto">
            <div class="row y-gap-20 items-center">
                <div class="col-auto">
                    <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
                </div>
                <div class="col-auto">
                    <div class="row x-gap-20 y-gap-10 items-center text-14">
                        <div class="col-auto">
                            <a href="#" class="text-13 lh-1">Privacy</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="text-13 lh-1">Terms</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="text-13 lh-1">Site Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="d-flex x-gap-5 y-gap-5 items-center">
                <button class="text-14 fw-500 underline">English (US)</button>
                <button class="text-14 fw-500 underline">USD</button>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>

<!-- JavaScript -->
<!-- <script>
            var selectElement = document.getElementById("select1");
 var hiddenField1 = document.getElementById("hiddenField1");
 var hiddenField2 = document.getElementById("hiddenField2");

  // Lấy giá trị của tùy chọn đầu tiên khi trang được tải
        var selectedValue = selectElement.options[selectElement.selectedIndex].value;

        // Phân tách giá trị thành hai phần dựa trên dấu gạch ngang
        var parts = selectedValue.split('-');
        var value1 = parts[0];
        var value2 = parts[1];

        // Gán giá trị vào các trường ẩn trong form
        hiddenField1.value = value1;
        hiddenField2.value = value2;

 // Thêm sự kiện để lắng nghe sự thay đổi trong select
 selectElement.addEventListener("change", function () {
   // Lấy giá trị của tùy chọn được chọn
   var selectedValue = selectElement.options[selectElement.selectedIndex].value;

   // Phân tách giá trị thành hai phần dựa trên dấu gạch ngang
   var parts = selectedValue.split("-");
   var diadiem = parts[0];
   var iddiadiem = parts[1];

   // Gán giá trị vào các trường ẩn trong form
   hiddenField1.value = diadiem;
   hiddenField2.value = iddiadiem;
 });
        </script> -->
<!-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
</script> -->


    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
    ClassicEditor
                .create(document.querySelector('#editor1'), {
                    ckfinder:
                    {
                        uploadUrl: 'fileupload.php'
                    }
                })
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
    ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder:
                    {
                        uploadUrl: '../../../lib/config/fileupload.php'
                    }
                })
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
    </script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.1/dist/index.min.js"></script>

<script src="/public/js/vendors.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/main2.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-vendor-hotels.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:13:28 GMT -->

</html>