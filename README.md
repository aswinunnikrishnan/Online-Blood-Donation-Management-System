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

## Sample screenshots

![out (5)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/0139e34c-694f-4b4d-b1be-8eaf78943dee)
![out (10)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/57b001a0-c41b-4fcd-b8f8-ba9afa26781a)
![out (11)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/04eef227-cc56-467b-8570-6bb718976262)
![out (15)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/ff07ecfa-fb02-458a-8086-609edf65b76a)
![out (14)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/62239100-f161-4307-9935-7c9ba6f86dd2)
![out (13)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/75f6bcd6-5660-49dd-a522-3bbb198c705e)
![out (17)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/ce54ef2f-ff6a-4f87-8b14-943273f4eb0e)
![out (16)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/590689a5-1272-4245-9aec-5e43c0079baf)

![Screenshot 2023-07-21 214936](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/0e0ce2d2-93da-4ec2-9cbb-99fba256d230)
![out (22)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/8a9a6b00-d3b7-4392-b0d6-9858303149d5)
![out (2)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/77a9d777-b8de-4328-b331-0582da0744f9)


![out (7)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/85e739d2-92d1-41c8-94f5-f915029c01a0)
![out (20)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/2a51106c-3197-46bd-82f7-0a90eb2f3039)
![out (18)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/32b80ea7-c494-4979-9c14-482f1891e2a0)






  
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
  username = admin
  password = 123
  ```


## MIT License
     
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/blob/e4d2f402f6368f381eae7487ccc8a65b2c078fbe/LICENSE)


This project is licensed under the MIT License.  


