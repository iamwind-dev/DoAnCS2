<footer class="footer -dashboard mt-60">
    <div class="footer__row row y-gap-10 items-center justify-between">
        <div class="col-auto">
            <div class="row y-gap-20 items-center">
                <div class="col-auto">
                    <div class="text-14 lh-14 mr-30">© 2023 WINK LLC All rights reserved.</div>
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
                <button class="text-14 fw-500 underline">Việt Nam (VND)</button>
                <button class="text-14 fw-500 underline">VND</button>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>


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