 <form action="" method="post">
                                <div class="form-group">
                                    <label>USername</label>
                                    <input class="au-input au-input--full" type="text" name="Username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="subject.php">Forgotten Password?</a>
                                    </label>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="singin">sign in</button>
                                </div>
                                
                                <input type="submit" name="sub" value="sign in" href="subject.php">
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>

                           <?php 
                            include('connection.php');
                            if (isset($_POST['singin'])) {
                                if ($stm = $ok -> prepare("SELECT * FROM `student_tbl` WHERE `Username`=? AND `Password`=?")) {
                                   $stm->bind_param(ss, $_POST['Username'], $_POST['Password']);
                                   $stm->execute();
                                   $stm->store_result();
                                   if ($stm->num_rows > 0) {
                                      
                                     header("location: pre-enrollment.php");
                                   }else{
                                    echo "string";
                                   }
                                }
                                
                            }
                             ?>