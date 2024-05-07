<div class="container">
    <div class="col-lg-7 mx-auto">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registration Page</h1>
                            </div>
                            <form action="" class="user">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control form-control-user" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control form-control-user" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password2" id="password2" class="form-control form-control-user" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Accoutn</button>
                            </form>
                            <hr>
                            <div class="text-center"><a href="<?= base_url('auth/forgot_password'); ?>" class="small">Forgot Password</a></div>
                            <div class="text-center"><a href="<?= base_url('auth/'); ?>" class="small">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>