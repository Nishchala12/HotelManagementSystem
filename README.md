# Hotel Management System
A project which depicts the working of a typical Hotel Management Website. It invloves Customer Check-Ins and Check-Outs, Employee salary calculation, and Admin handling and tracking of Employees, Customers, and Bookings. With exclusive pages for each entity, a seamless experience is achieved.

## Tech Stack
- HTML
- PHP
- SQL
- CSS
<br><br>

## Architecture
![Flowchart.png](https://www.dropbox.com/s/h2pi55d5eafdpwr/Flowchart.png?dl=0&raw=1)
<br><br>

## Database
![Entity.png](https://www.dropbox.com/s/fl78d1pt22ng6i4/Flowchart.png?dl=0&raw=1)
<br><br>

## List of Files
### /HotelManagement/Login.css
### /HotelManagement/CustomerSignup.css
### /HotelManagement/EmployeeSignup.css
### /HotelManagement/AdminSignup.css
- The above files are Cascading Style Sheets which provide styling for the Login, Customer Sign Up, Employee Sign Up, and Admin Sign Up pages respectively.
<br><br>

### /HotelManagement/bg.jpg
- A JPG image used as the background image for the entire website.
<br><br>

### /HotelManagement/Login.php
- A PHP file responsible for the server side scripting for the Login page.
- Uses SQL commands for the verification of user credentials and displays appropriate error messages on entering incorrect data, and validation messages on successful login.
- Has multiple checks to ensure valid entry of data.
<br><br>

### /HotelManagement/LoginPage.php
- The PHP file with the front-end of the Login Page coded in HTML.
- Represents a standard Login Page.
<br><br>

### /HotelManagement/Logout.php
- Once the user clicks on the Logout button, the sessions created are destroyed.
<br><br>

### /HotelManagement/Header.php
- Starts the session as required.
<br><br>

### /HotelManagement/CustomerSignup.php
### /HotelManagement/EmployeeSignup.php
### /HotelManagement/AdminSignup.php
- PHP files responsible for server side scripting for the Customer, Employee, and Admin sign-up pages respectively.
- Use SQL queries and statements to enter valid credentials into the database and display appropriate messages incase of both errors and successful sign-ups.
- Has multiple checks to ensure valid entry of data.
<br><br>

### /HotelManagement/CustomerSignupPage.php
### /HotelManagement/EmployeeSignupPage.php
### /HotelManagement/AdminSignupPage.php
- The PHP file with the front-end of the Sign-Up Pages of Customer, Employee, and Admin respectively coded in HTML.
- Represents a standard Sign-Up Page.
<br><br>

### /HotelManagement/CustomerPage.css
### /HotelManagement/EmployeePage.css
### /HotelManagement/AdminPage.css
- The above files are Cascading Style Sheets which provide styling for the Customer, Employee, and Admin pages respectively that are displayed after sign-up/login.
<br><br>

### /HotelManagement/CustomerDisplayPage.php
- The PHP file with the front-end of the Customer Page coded in HTML.
- It is displayed right after the Customer signs up or logs in.
- Room Details are provided, along with `Calculate` and `Book Now` buttons.
<br><br>

### /HotelManagement/EmployeeDisplayPage.php
- The PHP file with the front-end of the Employee Page coded in HTML.
- It is displayed right after the Employee signs up or logs in.
- `View Time Table` and `View Salary Details` are the buttons provided.
<br><br>

### /HotelManagement/AdminDisplayPage.php
- The PHP file with the front-end of the Admin Page coded in HTML.
- It is displayed right after the Admin signs up or logs in.
- `Employee Details`, `Customer Details`, and `Booking Details` are the buttons provided.
<br><br>

### /HotelManagement/CustomerPage.php
- PHP file to provide server side scripting for `CustomerDisplayPage.php`.
- Displays the complete receipt for both 3-Star and 5-Star room bookings.
<br><br>

### /HotelManagement/EmployeePage.php
- PHP file to provide server side scripting for `EmployeeDisplayPage.php`.
- Displays Employee salary breakdown and the Employee time table.
<br><br>

### /HotelManagement/AdminPage.php
- PHP file to provide server side scripting for `AdminDisplayPage.php`.
- Displays signed-up Employees, signed-up Customers, and all the bookings made by Customers (data is retrieved from the SQL database).
<br><br>

### /HotelManagement/TimeTable.html
- The page is used to display the time table in the Employee Display Page.
<br><br>

### /HotelManagement/TimeTable.png
- A PNG image of the Employee Time Table.
<br><br>








