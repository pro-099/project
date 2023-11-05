<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg=2 shadow-sm sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#jewel.php">workers world</a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="jewel.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="employees.php">about</a>
                    </li>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="sservices.php">services</a>
                    </li>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="c_as.php">contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shado-none me-lg-4 me-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
                        login
                    </button>
                    <button type="button" class="btn btn-outline-dark shado-none" data-bs-toggle="modal" data-bs-target="#registernmodal">
                        register
                    </button>
                </div>
                </div>
            </div>
            </nav>




                            <!-- Modal -->
                <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method="post">
                                    <div class="modal-header">
                                <h5 class="modal-title d-flex align-item-center"><i class="bi bi-person-circle fs-3 me-2"></i>user login</h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none" >
                            </div>
                            <div class="mb-4">
                                <label class="form-label">password</label>
                                <input type="password" class="form-control shadow-none" >
                            </div>
                            <div class="d-flex align-item-center justify-content-between mb-2">
                                <button type="submit"class="btn btn-dark shadow-none">login</button>
                                <a href="javascript: void(0)" class="text-secondary text-decoration-none">forgot password?</a>
                            </div>
                            </div>
                        
                        </form>
                    
                    </div>
                </div>
                </div>

                <div class="modal fade" id="registernmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form>
                                    <div class="modal-header">
                                <h5 class="modal-title d-flex align-item-center">
                                <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                                </i>register</h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                note:your details must match with your ID (aadhar card,passport,driving license, etc)
                            </span>
                            <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">name</label>
                                <input type="text" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">email</label>
                                <input type="email" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">phone no</label>
                                <input type="number" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">photo</label>
                                <input type="file" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">address</label>
                                <textarea  class="form-control shadow-none" row="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">password</label>
                                <input type="password" class="form-control shadow-none" >
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">confirm password</label>
                                <input type="password" class="form-control shadow-none" >
                            </div>
                            </div>
                            <div class="text-center my-1">
                                <button type="submit"class="btn btn-dark shadow-none">register</button>
                            </div>
                            </div>
                            </div>
                            </div>
                        
                        
                        </form>
                    
                    </div>
                </div>