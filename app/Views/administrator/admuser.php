                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/admin/img/<?= user()->user_image; ?>" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= user()->username; ?></h5>
                                    <p class="card-text"><?= user()->email; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->