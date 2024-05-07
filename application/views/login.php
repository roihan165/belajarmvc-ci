    <div class="container">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>
                                <form action="" class="user">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Email Address...*">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                <hr>
                                <div class="text-center"><a href="<?= base_url('auth/forgot_password');?>" class="small">Forgot Password?</a></div>
                                <div class="text-center"><a href="<?= base_url('auth/registration');?>" class="small">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>