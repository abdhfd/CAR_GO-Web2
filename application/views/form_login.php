<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="../assets/cargo.png" alt="logo" width="140" class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Selamat Datang di <span class="font-weight-bold">CAR-GO</span></h4>
                        <p class="text-muted">Sebelum memulai harap login terlebih dahulu </p>

                        <span class="m-2"><?= $this->session->flashdata('pesan'); ?></span>
                        <form method="POST" action="<?= base_url('auth/login'); ?>">
                            <div class="form-group">
                                <label for="username">Username/E-Mail</label>
                                <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                                <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2">
                                <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <a href="auth-forgot-password.html" class="float-left mt-3">
                                    Lupa Password?
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                    Masuk
                                </button>
                            </div>

                            <div class="mt-5 text-center">
                                Belum punya akun? <a href="<?= base_url('register'); ?>">Buat Akun</a>
                            </div>
                        </form>

                        <div class="text-center mt-5 text-smalls">
                            Copyright &copy; CAR-GO. Made with ???? by Fid
                            <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/assets_stisla/assets/img/unsplash/login.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Wellcome</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Banyuwangi, Indonesia</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/00c1oHuQsnI">Fariez Nurkholiq</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>