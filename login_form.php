                        <div id="logo">
                          <?php include('html/logo.html');?>
                          </div>
							<form  method="post" action="login.php" autocomplete="on"> 
                              <p align="center">
                                  <b><big> Log in </p>
								<hr>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > username </label>
                                    <input id="username" name="username" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">password </label>
                                    <input id="password" name="password" required="required" type="password"/> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Sign up</a>
								</p>
                            </form>

                  