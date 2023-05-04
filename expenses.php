<?php
$con = new mysqli('localhost', 'root', '', 'finacial_data');
$month = 0;
$year = 0;
$salary = 0;
$other = 0;
$house = 0;
$groceries = $health = $shopping = $otherexpanses = $mutual_funds = $emergency = $fixedeposit = $liquidcash = 0;

function entrynewdata()
{

  if (isset($_POST['submit-new'])) {
    $year = $_POST['year'];
    $month = $_POST['month'];
    $salary = $_POST['Salary'];
    $other = $_POST['Other_source'];
    $house = $_POST['House_rent'];
    $groceries = $_POST['groceries_and_food'];
    $health = $_POST['health'];
    $shopping = $_POST['shopping'];
    $otherexpanses = $_POST['other_expanses'];
    $mutual_funds = $_POST['mutual_funds'];
    $emergency = $_POST['emergency_funds'];
    $fixedeposit = $_POST['fixed_deposit'];
    $liquidcash = $_POST['liquid_cash'];
    //adding new data
    $text = "INSERT INTO salary (Year, Month, Salary, Other_source) VALUES ('$year','$month','$salary','$other')";
    $query = $con->query($text);

    $text2 = "INSERT INTO `expanses`(`Year`, `Month`, `House_rent`, `Groceries_and_food`, `Health`, `Shopping`, `Any_other_expanses`) VALUES ('$year','$month','$house','$groceries','$health','$shopping','$otherexpanses')";
    $query = $con->query($text2);

    $text3 = "INSERT INTO `savings`(`Year`, `Month`, `Mutual_funds`, `Emergency_funds`, `Fixed_deposit`, `Liquid_cash`) VALUES ('$year','$month','$mutual_funds','$emergency','$fixedeposit','$liquidcash')";
    $query = $con->query($text3);

  }

}



//graph showing data

$year = 2023;
$month = 3;
function yearandmonth()
{
  if (isset($_POST['submit'])) {
    if (!empty($_POST['Year'])) {
      $year = $_POST['Year'];
      $month = $_POST['Month'];
      // echo 'You entered'.$year.'and'.$month;
    } else {
    }
  }
}
// expanses
$query = $con->query("SELECT House_rent,Groceries_and_food,Health,Shopping FROM Expanses where Month='$month' AND Year='$year' ");
$data = array();
foreach ($query as $row) {
  $data[] = $row;
}
$total_expanses = (int) ($data[0]['House_rent']) + (int) ($data[0]['Groceries_and_food']) + (int) ($data[0]['Health']) + (int) ($data[0]['Shopping']);
$amount = [(int) ($data[0]['House_rent']), (int) ($data[0]['Groceries_and_food']), (int) ($data[0]['Health']), (int) ($data[0]['Shopping'])];




// yearly data  for expanses;

$text2020 = "SELECT House_rent,Groceries_and_food,Health,Shopping From Expanses where Year='2020' ";
$expanses2020 = $con->query($text2020);
$totalexpanses_2020 = 0;
foreach ($expanses2020 as $row3) {
  $totalexpanses_2020 = $totalexpanses_2020 + $row3['House_rent'] + $row3['Groceries_and_food'] + $row3['Health'] + $row3['Shopping'];
}



$text2021 = "SELECT House_rent,Groceries_and_food,Health,Shopping From Expanses where Year='2021' ";
$expanses2021 = $con->query($text2020);
$totalexpanses_2021 = 0;
foreach ($expanses2021 as $row3) {
  $totalexpanses_2021 = $totalexpanses_2021 + $row3['House_rent'] + $row3['Groceries_and_food'] + $row3['Health'] + $row3['Shopping'];
}



$text2022 = "SELECT House_rent,Groceries_and_food,Health,Shopping From Expanses where Year='2022' ";
$expanses2022 = $con->query($text2020);
$totalexpanses_2022 = 0;
foreach ($expanses2022 as $row3) {
  $totalexpanses_2022 = $totalexpanses_2022 + $row3['House_rent'] + $row3['Groceries_and_food'] + $row3['Health'] + $row3['Shopping'];
}


$text2023 = "SELECT House_rent,Groceries_and_food,Health,Shopping From Expanses where Year='2023' ";
$expanses2023 = $con->query($text2023);
$totalexpanses_2023 = 0;
foreach ($expanses2023 as $row3) {
  $totalexpanses_2023 = $totalexpanses_2023 + $row3['House_rent'] + $row3['Groceries_and_food'] + $row3['Health'] + $row3['Shopping'];
}










// savings
$savings = $con->query("SELECT Mutual_funds,Emergency_funds,Fixed_deposit,Liquid_cash FROM savings where Month='$month' AND Year='$year' ");
$data2 = array();
foreach ($savings as $row2) {
  $data2[] = $row2;
}
$total_savings = (int) ($data2[0]['Mutual_funds']) + (int) ($data2[0]['Emergency_funds']) + (int) ($data2[0]['Fixed_deposit']) + (int) ($data2[0]['Liquid_cash']);
$amount2 = [(int) ($data2[0]['Mutual_funds']), (int) ($data2[0]['Emergency_funds']), (int) ($data2[0]['Fixed_deposit']), (int) ($data2[0]['Liquid_cash'])];

//yearly data for savings.

$text2020 = "SELECT Mutual_funds,Emergency_funds,Fixed_deposit,Liquid_cash From savings where Year='2020' ";
$saving2020 = $con->query($text2020);
$totalsavings_2020 = 0;
foreach ($saving2020 as $row3) {
  $totalsavings_2020 = $totalsavings_2020 + $row3['Mutual_funds'] + $row3['Emergency_funds'] + $row3['Fixed_deposit'] + $row3['Liquid_cash'];
}


$text2021 = "SELECT Mutual_funds,Emergency_funds,Fixed_deposit,Liquid_cash From savings where Year='2021' ";
$saving2021 = $con->query($text2021);
$totalsavings_2021 = 0;
foreach ($saving2021 as $row3) {
  $totalsavings_2021 = $totalsavings_2021 + $row3['Mutual_funds'] + $row3['Emergency_funds'] + $row3['Fixed_deposit'] + $row3['Liquid_cash'];
}


$text2022 = "SELECT Mutual_funds,Emergency_funds,Fixed_deposit,Liquid_cash From savings where Year='2022' ";
$saving2022 = $con->query($text2022);
$totalsavings_2022 = 0;
foreach ($saving2022 as $row3) {
  $totalsavings_2022 = $totalsavings_2022 + $row3['Mutual_funds'] + $row3['Emergency_funds'] + $row3['Fixed_deposit'] + $row3['Liquid_cash'];
}


$text2023 = "SELECT Mutual_funds,Emergency_funds,Fixed_deposit,Liquid_cash From savings where Year='2023' ";
$saving2023 = $con->query($text2023);
$totalsavings_2023 = 0;
foreach ($saving2023 as $row3) {
  $totalsavings_2023 = $totalsavings_2023 + $row3['Mutual_funds'] + $row3['Emergency_funds'] + $row3['Fixed_deposit'] + $row3['Liquid_cash'];
}








//salary

$text = "SELECT Salary,Other_source FROM salary where Month='$month' AND Year='$year' ";
$salary = $con->query($text);
$data3 = array();
foreach ($salary as $row3) {
  $data3[] = $row3;
}
$total_income = (int) ($data3[0]['Salary']) + (int) ($data3[0]['Other_source']);
$amount3 = [(int) ($data3[0]['Salary']), (int) ($data3[0]['Other_source'])];


//yealy data
$text2020 = "SELECT Salary,Other_source From salary where Year='2020' ";
$salary2020 = $con->query($text2020);
$totalsalary2020 = 0;
$totalother2020 = 0;
foreach ($salary2020 as $row3) {
  $totalsalary2020 += $row3['Salary'];
  $totalother2020 += $row3['Other_source'];
}
$total_income_2020 = $totalsalary2020 + $totalother2020;



$text2021 = "SELECT Salary,Other_source From salary where Year='2021' ";
$salary2021 = $con->query($text2021);
$totalsalary2021 = 0;
$totalother2021 = 0;
foreach ($salary2021 as $row3) {
  $totalsalary2021 += $row3['Salary'];
  $totalother2021 += $row3['Other_source'];
}
$total_income_2021 = $totalsalary2021 + $totalother2021;



$text2022 = "SELECT Salary,Other_source From salary where Year='2022' ";
$salary2022 = $con->query($text2022);
$totalsalary2022 = 0;
$totalother2022 = 0;
foreach ($salary2022 as $row3) {
  $totalsalary2022 += $row3['Salary'];
  $totalother2022 += $row3['Other_source'];
}
$total_income_2022 = $totalsalary2022 + $totalother2022;





$text2023 = "SELECT Salary,Other_source From salary where Year='2023' ";
$salary2023 = $con->query($text2023);
$totalsalary2023 = 0;
$totalother2023 = 0;
foreach ($salary2023 as $row3) {
  $totalsalary2023 += $row3['Salary'];
  $totalother2023 += $row3['Other_source'];
}
$total_income_2023 = $totalsalary2023 + $totalother2023;







?>
