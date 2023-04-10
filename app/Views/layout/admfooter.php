            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Admin Karang Taruna Desa Kota Batu</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="/admin/vendor/jquery/jquery.min.js"></script>
            <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/admin/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/admin/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/admin/js/demo/chart-area-demo.js"></script>
            <script src="/admin/js/demo/chart-pie-demo.js"></script>

            <script>
                function previewImgGalery() {

                    const gambargalery = document.querySelector('#gambargalery');

                    const gambargaleryLabel = document.querySelector('.custom-file-label');

                    const imgPreview = document.querySelector('.img-preview');

                    gambargaleryLabel.textContent = gambargalery.files[0].name;

                    const filegambargalery = new FileReader();

                    filegambargalery.readAsDataURL(gambargalery.files[0]);

                    filegambargalery.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>
            <script>
                function previewImgberita() {

                    const gambarberita = document.querySelector('#gambarberita');

                    const gambarberitaLabel = document.querySelector('.custom-file-label');

                    const imgPreview = document.querySelector('.img-preview');

                    gambarberitaLabel.textContent = gambarberita.files[0].name;

                    const filegambarberita = new FileReader();

                    filegambarberita.readAsDataURL(gambarberita.files[0]);

                    filegambarberita.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                }
            </script>



            </body>

            </html>