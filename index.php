<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">

    <title>Document</title>
</head>

<body>
    <!-- navbar  -->
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">Financial Dash<span>board</span></div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
 <!-- NAVIGATION MENUS -->
            <div class="menu">

                <li><a href="#header">Home</a></li>
                <li><a href="#booking-section">Entry new Data</a></li>
                <li><a href="#chart">Chart</a></li>
                <li><a href="#ourteams">Our Teams</a></li>
                <li><a href="#contact">Contact</a></li>
            </div>
        </ul>
    </nav>
    <!-- end of navbar -->

    <!-- header -->

    <header class="header" id="header">
        <div class="container">
            <div class="item">
                <h2 class="logo2">Financial Dash<span>board<span></h2>
                <div class="item-item">

                    <p>The main objective of this project is to build a personal financial dashboard is a digital<br>
                        tool that provides individuals with a real-time, consolidated view of their financial health.
 <br>This dashboard allows users to monitor their spending, track their investments, and
                        <br>analyze their financial goals.<br><br>
                        By providing a centralized location for financial information, users can make informed
                        decisions<br> about their money and plan for their future.The dashboard can also offer
                        personalized insights<br> and recommendations based on the user's financial data, helping them
                        to optimize their <br>financial performance. <br><br>Ultimately, a personal financial dashboard
                        can help individuals achieve greater financial <br>security and control over their financial
                        lives.</p>
                </div>
            </div>
        </div>
    </header>

    <!--  end of header -->


    <!-- new entry data section -->

    <section class="booking-section" id="booking-section">
        <div class="row">
 <div class="col-md-6">
                <div class="form-col">
                    <h4>Entry new Data</h4>
                </div>

                <form action="" method="post">
                    <div class="row2">
                        <div class="col-md-61">
                            <h3>Year And Month</h3>
                            <span class="flex-design">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <span><input type="number" placeholder="2023" name="year" value="2023"
                                            readonly></span>
                                </div>
                                <div class="form-group">
                                    <label for="month">Month</label>
                                    <span><input type="number" placeholder="April" name="month" id="month-of"
                                            readonly></span>
                                </div><br>
 </span>
                        </div>
                        <div class="col-md-61">
                            <h3>Income</h3>
                            <span class="flex-design">
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <span><input type="text" placeholder="" name="Salary" required></span>
                                </div>
                                <div class="form-group">
                                    <label for="other">Other_source</label>
                                    <span><input type="text" placeholder="" name="Other_source" required></span>
                                </div><br>
                            </span>
                        </div>
                        <div class="col-md-61">
                            <h3>Expanses</h3>
                            <span class="flex-design">
                                <div class="form-group">
                                    <label for="house">House rent</label>
                                    <span><input type="text" placeholder="" name="House_rent" required></span>
                                </div>
                                <div class="form-group">
                                    <label for="groceries">Groceries and Food</label>
                                    <span><input type="text" placeholder="" name="groceries_and_food" required></span>
                                </div>
                            </span>
                            <span class="flex-design">
                                <div class="form-group">
 <label for="health">Health</label>
                                    <span><input type="text" placeholder="" name="health" required></span>
                                </div>
                                <div class="form-group">
                                    <label for="shopping">Shopping</label>
                                    <span><input type="text" placeholder="" name="shopping" required></span>
                                </div>
                            </span>
                            <div class="form-group">
                                <label for="other-expanses">Any other expanses</label>
                                <span><input type="text" placeholder="" name="other_expanses" required></span>
                            </div><br>
                        </div>
                        <div class="col-md-61">
                            <h3>Savings</h3>
                            <span class="flex-design">
                                <div class="form-group">
                                    <label for="s1">Mutual Funds</label>
                                    <span><input type="text" placeholder="" name="mutual_funds" required></span>
                                </div>
                                <div class="form-group">
                                    <label for="s2">Emergency Funds</label>
                                    <span><input type="text" placeholder="" name="emergency_funds" required></span>
                                </div>
                            </span>
 <span class="flex-design">
                                <div class="form-group">
                                    <label for="s3">Fixed deposit</label>
                                    <span><input type="text" placeholder="" name="fixed_deposit" required></span>
                                </div>
                                <div class="form-group">
                                    <label for="s4">Liquid cash</label>
                                    <span><input type="text" placeholder="" name="liquid_cash" required></span>
                                </div><br>
                            </span>
                        </div>
                        <div class="button-container">
                            <input type="submit" name="submit-new" onclick="entrynewdata()" class="btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="chart">

        <!-- end of new entry data  -->



<!-- chart section -->


        <?php include 'main.php'; ?>
        <section>
            <div class="row5">
                <span>
                    <div class="column">
                        <p>
                            <input value="<?php echo $total_income_2020 ?>" readonly></input>
                            <span><label>Total Income in 2020</label></span>
                        </p>
                    </div>
                    <div class="column">
                        <p>
                            <input value="<?php echo $total_income_2021 ?>" readonly></input>
                            <span><label>Total Income in 2021</label></span>
                        </p>
                    </div>
                    <div class="column">
                        <p>
                            <input value="<?php echo $total_income_2021 ?>" readonly></input>
                            <span><label>Total Income in 2022</label></span>
                        </p>
                    </div>
                    <div class="column">
                        <p>
                            <input value="<?php echo $total_income_2023 ?>" readonly></input>
                            <span><label>Total Income in 2023</label></span>
                        </p>
                    </div>
                </span>
            </div>
</section>

        <section style="position:relative;">
            <div class="row5">
                <span>
                    <div class="column">
                        <p class="total_expanses">
                            <input value="<?php echo $total_income ?>"></input>
                            <span><label>Total Income</label></span>
                        </p>
                    </div>
                    <div class="column">
                        <p class="total_expanses">
                            <input value="<?php echo $total_expanses ?>" readonly></input>
                            <span><label>Total Expanses</label></span>
                        </p>
                    </div>

                    <div class="column">
                        <p class="total_savings">
                            <input value="<?php echo $total_savings ?>"></input>
                            <span><label>Total Savings</label></span>
                        </p>
                    </div>
                    <div class="form">
                        <form action="" method="post">
                            <h3>Filter</h3>
                            <div class="column">
                                <p class="select-year">
                                    <select name="Year">
<option value="">select year</option>
                                        <option value="2021">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </p>
                            </div>
                            <div class="column">
                                <p class="select-month">
                                    <select name="Month">
                                        <option>select month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </p>
                            </div>
                            <span><br>
                                <div class="column2">
                                    <p>
                                        <input type="submit" name="Submit" onclick="yearandmonth()"
                                            value="Select Month & year" id="submit">
                                    </p>
                                </div>

                        </form>
                    </div>
         </form>
                    </div>
                </span>
            </div>
            <div id="graph">
                <div style="width: 500px;" class="expanses">
                    <canvas id="myChart"></canvas>
                    <?php include 'expanses.php'; ?>
                </div>

                <div style="width:500px;" class="savings">
                    <canvas id="myChart2"></canvas>
                    <?php include 'savings.php'; ?>
                </div>

                <div style="width:500px;" class="salary">
                    <canvas id="mysalary"></canvas>
                    <?php include 'salary.php'; ?>
                </div>

                <div style="width:500px;" class="monthly">
                    <canvas id="monthly2"></canvas>
                    <?php include 'monthly2.php'; ?>
                </div>

                <!-- <div style="width:500px;" class="piechart" id="d123">
                    <canvas id="piechart"></canvas>
                    <?php include 'piechart.php' ?>
                </div> -->
        </section>



        <!-- end of chart section -->

  <!-- team section -->
        <div class="wrapper" id="ourteams">
            <h1>Our Team</h1>
            <div class="our_team">
                <div class="team_member">
                    <div class="member_img">
                        <img src="member_1.png" alt="our_team">
                    </div>
                    <h3>Ankit Kumar</h3>
                    <span>Frontend Deveoper</span>
                    <p>Developes the specializes in building the user interface (UI) and user experience (UX) of a
                        website or web application. They work with web designers to convert visual designs into code
                        using languages such as HTML, CSS, and JavaScript.</p>
                </div>
                <div class="team_member">
                    <div class="member_img">
                        <img src="member_2.png" alt="our_team">
                    </div>
                    <h3>Yashi Gupta</h3>
                    <span>Databasese Developer</span>
                    <p>Developes the specializes in designing, building, and maintaining databases. They work with
                        database management systems (DBMS) such as MySQL to create and manage databases that store and
                        retrieve data efficiently.</p>
   </div>
                <div class="team_member">
                    <div class="member_img">
                        <img src="member_3.png" alt="our_team">
                    </div>
                    <h3>Vikash Chaudhary</h3>
                    <span>Chart Developer</span>
                    <p>Developes the specializes in creating visual representations of data using charting libraries and
                        tools. They work with chart.js to create interactive and visually appealing charts that help
                        convey insights from data.</p>
                </div>
            </div>
        </div>
    </section>




    <!-- footer section -->
    <footer class="footer-distributed" id="contact">

        <div class="footer-left">

            <h3>Financial<span>Dashboard</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <a href="#">Entry new Data</a>

                <a href="#">Chart</a>

 <a href="#">Chart</a>

                <a href="#">Our Teams</a>

                <a href="#">Faq</a>

                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Finacial Dashboard © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Noida Institute Of Engineering And Technology</span>Greater Noida, Uttar Pradesh</p>
            </div>

            <div>
                <i class="fa-regular fa-phone"></i>
                <p>+91 6299063205</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">niet@college.com</a></p>
            </div>

        </div>

        <div class="footer-right">
 <div class="footer-icons">

                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>

            </div>

        </div>

    </footer>

    <!-- end of footer -->


    <script src="index.js"></script>
</body>

</html>
