<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 mb-3" style="padding: 10px;">Detail List User</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('/admin/img/' . $user->user_image); ?>" alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h4><?= $user->username; ?></h4>
                                </li>
                                <?php if ($user->fullname) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= $user->email; ?></li>
                                <li class="list-group-item">
                                    <span class="badge badge-success"><?= $user->name; ?></span>
                                </li>
                                <li class="list-group-item">
                                    <a href="<?= base_url('administrator/userlist'); ?>">Kembali</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>