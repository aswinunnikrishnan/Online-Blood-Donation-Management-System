# Online-Blood-Donation-Management-System

The Blood Donation Management System is a web-based application developed using PHP and HTML that facilitates the management of blood donation activities. This system aims to connect donors, hospitals, and administrators to efficiently manage and coordinate blood donation processes.

## Users and Features
1. Donors:

- Donors can register and create accounts.
- Donors can view their donation history.
- Donors can register to donate blood.
- Donors can view the donation status.
- Donors can download the e-certificate generated after the donation process is completed.
- Donors can contact the administrators , if there are any queries.
2. Hospitals:

- Hospitals can register and create accounts.
- Hospitals can request for blood units with the option of adding priority.
- Hospitals can view thier request status.
- Hospitals can directly contact the administrators if there are any queries.
3. Administrators:

- Administrators can manage donors.
- Administrators can approve or reject the donation request from donors made.
- Administrators can approve or reject donation requests from hospitals.
- Administrators can view the queries from hospitals and donors.
- Administrators can generate e-certificates for the donors who have completed the donation process successfully.
  
## Installation

1. Download and install [XAMPP](https://www.apachefriends.org/index.html), if you haven't already.

2. Clone the repository or download the ZIP:

Copy code
```
git clone https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System.git
```
3. Navigate to the project directory:

Copy code
```
cd Online-Blood-Donation-Management-System
```
4. Move the project folder to the htdocs directory inside your XAMPP installation folder (e.g., C:\xampp\htdocs).

5. Start the Apache and MySQL services using the XAMPP control panel.

6. Import the database:

- Open phpMyAdmin by visiting `http://localhost/phpmyadmin` in your web browser.
- Create a new database .
- Import the provided SQL dump file (blood_donation.sql) from the project directory into the created database.
7. Configure the database connection:

- Open config.php in a text editor located within your project's folder.
- Modify the database connection parameters ($dbHost, $dbUsername, $dbPassword, $dbName) to match your database setup.
- Open your web browser and navigate to  `http://localhost/Online-Blood-Donation-Management-System` to access the application.

## Usage
1. Donors:

- Register for an account or log in if you already have one.
- View your donation history.
- Register for donation.
- Download the e-certificate after donation process is completed and approved.
- Contact Administrator if there any queries.
2. Hospitals:

- Register for an account or log in if you already have one.
- Place requests for blood units.
- View the request status.
- Contact Administrator if there any queries.
3. Administrators:

- Log in to `http://localhost/Online-Blood-Donation-Management-System/admin/login.php`using the administrator credentials given below or create new one directly through database if needed.
- Administrators can manage donors.
- Administrators can approve or reject the donation request from donors made.
- Administrators can approve or reject donation requests from hospitals.
- Administrators can view the queries from hospitals and donors.
- Administrators can generate e-certificates for the donors who have completed the donation process successfully.
  ### Administrators Credentials
  ```
  username = test
  password = 123
  ```


## MIT License

  [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
