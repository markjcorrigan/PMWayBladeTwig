        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">

        <a class="navbar-brand" href="pmway.php">PMWay</a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarNav">





              <ul class="navbar-nav ml-auto">

<!--               <li class="nav-item">-->
<!---->
<!--                      <a class="nav-link" href="in2mins.php">&nbsp;PMWay-in2minutes</a>-->
<!---->
<!--                  </li class="nav-item">-->

<!--                 <li class="nav-item">-->
<!---->
<!--                      <a class="nav-link" href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact</a>-->
<!---->
<!--                  </li class="nav-item">-->

<!--                   <li class="nav-item">-->
<!---->
<!--                <a class="nav-link" href="register.php"><i class="fa fa-user"></i>&nbsp;Register</a>-->
<!---->
<!--						</li class="nav-item">-->





                     <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                Login|Logout

              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

<!--                <a class="dropdown-item" href="login.php"><i class="fa fa-lock"></i>&nbsp;Login</a>-->
<!---->
<!--                <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a>-->



              </div>

            </li>





          <!--  <li><a href="login.php">Login</a></li> -->

           <?php if(logged_in()):?>



              <!--  <li><a href="admin.php">Admin</a></li> -->













         <?php endif; ?>





     </ul>





            </div>

       </nav>

















