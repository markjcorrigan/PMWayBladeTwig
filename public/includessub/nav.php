<script type="text/javascript">

function confirm_alert(node) {

    return confirm("This link takes you to a legacy version of the PMWay web. The site is best viewed on large screens.");

}

</script>



          <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">

        <a class="navbar-brand" href="/">PMWay</a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarNav">

              <ul class="navbar-nav ml-auto">

<!--              <li class="nav-item">-->
<!---->
<!--                      <a class="nav-link" href="../in2mins.php"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;(in2minutes)</a>-->
<!---->
<!--                  </li class="nav-item">-->



                        <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fa fa-cogs"></i>&nbsp;PMWays

              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

              <a class="dropdown-item" href="/sitemap.php">&nbsp;PMBOK Dashboard</a>

                                <a class="dropdown-item" href="/processesdash/pmbokdashnutshell.php">&nbsp;PMBOK (Dashboard with 'Teaching Overlay' / 'How To')</a>

                                <a class="dropdown-item" href="/default.php" onclick="return confirm_alert(this);"></a>







              </div>





                 <li class="nav-item">

                      <a class="nav-link" href="/contactpmway.php"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Contact</a>

                  </li class="nav-item">

            	  <li class="nav-item">

                      <a class="nav-link" href="/logout.php"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Logout</a>

                  </li class="nav-item">

















          <!--  <li><a href="login.php">Login</a></li> -->

           <?php if(logged_in()):?>



              <!--  <li><a href="admin.php">Admin</a></li> -->













         <?php endif; ?>



     </ul>





            </div>

       </nav>





























