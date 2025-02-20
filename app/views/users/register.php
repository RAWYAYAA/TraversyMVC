<?php require APPROOT . '/views/inc/header.php'; ?>
        <main class="d-flex justify-content-center align-items-center">
            <div class="login bg-white p-4 my-5" >
                <div class="login-logo border-start border-primary border-5 mx-4 px-2 my-4">
                    <h1>Youread</h1>
                </div>
                <div class="login-title text-center mb-3">
                    <h2 class="text-uppercase">Sing up</h2>
                    <p class="text-muted ">Remplissez soigneusement le formulaire d'inscription</p>
                    <!-- <?php
                    if(isset($_COOKIE['addUser'])){
                    echo '<div class="bg-info"><p>'. $_COOKIE['addUser'] .'</p></div>';
                    }
                ?> -->
                </div>
                <form class="row g-3" method="POST" action="<?php echo URLROOT; ?>/users/register" >  
                    <div class="col-md-12 ">
                        <label class="form-label text-muted">Nom complète  <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control shadow-none  <?php echo(!empty($data['nomcomplete_err'])) ? 'is-invalid' : ''; ?> " value="<?php  echo $data['nomcomplete']?>" name="nomcomplete" id="nomcomplete" placeholder="Enter your Full Name" >
                        <span class="invalid-feedback"><?php echo $data['nomcomplete_err']; ?></span>
                    </div>
                    <!-- <div class="col-md-6">
                        <label class="form-label text-muted">Last Name</label>
                        <input type="text" class="form-control shadow-none " name="lastName" id="lastName" placeholder="Enter your Last Name" >
                        <div id="message" class="d-none"><span class="text-danger mx-3 "><i class="bi bi-exclamation-circle-fill "></i> Last Name obligatoir valid</span></div>
                    </div> -->
                    <div class="col-md-12">
                        <label class="form-label text-muted">E-mail <sup class="text-danger">*</sup> </label>
                        <input type="text" class="form-control shadow-none  <?php echo(!empty($data['email_err'])) ? 'is-invalid' : ''; ?> " value="<?php  echo $data['email']?>" name="email" id="email" placeholder="Enter your Email" >
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Password <sup class="text-danger">*</sup> </label>
                        <input type="password" class="form-control shadow-none <?php echo(!empty($data['password_err'])) ? 'is-invalid' : ''; ?> " value="<?php  echo $data['password']?>"  name="password" id="password" placeholder="Enter your password" >
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>

                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Confirm-Password <sup class="text-danger">*</sup></label>
                        <input type="password" class="form-control shadow-none <?php echo(!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?> " value="<?php  echo $data['confirm_password']?>" name="confirm_password" id="confirmPassword" placeholder="Enter your password" >
                        <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Phone <sup class="text-danger">*</sup></label>
                        <input type="tel" class="form-control shadow-none <?php echo(!empty($data['phone_err'])) ? 'is-invalid' : ''; ?> " value="<?php  echo $data['phone']?>" name="phone" id="phone" placeholder="Enter your Number Phone" >
                        <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>

                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-muted">Salle <sup class="text-danger">*</sup></label>
                        <select class="form-control shadow-none <?php echo(!empty($data['salle_err'])) ? 'is-invalid' : ''; ?>" name="salle">
                            <option value="">select salle</option>
                            <option value="1">error 404</option>
                            <option value="2">namek</option>
                            <option value="3">aliens</option>
                            <option value="4">js1</option>
                            <option value="5">js2</option>
                            <option value="6">java</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['salle_err']; ?></span>

                    </div>
                    <!-- <div class="col-md-6">
                        <label class="form-label text-muted">Code Role</label>
                        <input type="text" class="form-control shadow-none " name="codeRole" placeholder="Enter your Code Role" > 
                    </div> -->
                    <div >
                        <input class="btn btn-primary w-100 p-2 mb-2 text-uppercase text-white shadow-none" type="submit" id="singup" value="Sign up">
                    </div>
                    <p class="text-center text-muted">Je suis déjà membre! <a class="text-primary cursor-pointer text-decoration-none" href="<?php echo URLROOT  ?>/users/login"> Sign in</a></p>
                </form>
                <!-- <?php
                    require_once 'include.php' ;
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                        // addUser($_POST);
                    }
                        
                ?> -->
            </div>

    </main>
<?php require APPROOT . '/views/inc/footer.php'; ?>