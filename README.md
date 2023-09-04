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

### Home Page
![out (5)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/484ad81f-2d80-441c-9132-7ded5460c7b1)
### Admin Login Page 
![out (10)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/68f0268d-f9ee-49f9-98bf-d8b897b9db49)
### Admin Dashboard
![out (11)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/27fefa34-8267-4bb7-ae25-0cf2a5b1a2b4)
### Hospital Blood Requests 
![out (15)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/17bf1541-9fab-422a-94a6-0a6bbb8c3c14)
### User Queries
![out (14)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/c7d0f0ec-a987-44ac-97d7-45e5d34624d2)
### Approved/Final Donors
![out (13)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/ef42c73f-0608-4851-b3f8-f9bde0083381)
### Hospital Queries
![out (17)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/105f865a-bda2-4866-b278-d6984af85a47)
### Blood Bank Status
![out (16)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/60c2288c-e9ed-473c-9bcc-5368e6efdce4)


### User Login/Register Page
![Screenshot 2023-07-21 214936](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/5825c3ed-5430-4cb8-9112-514646c20aba)
### User Dashboard
![out (22)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/06e4c89e-4b35-4710-8f4c-0c8d3c86a5d7)
### User Donation form
![out (2)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/ed363d6d-f953-4d99-9c47-4eca81ddd983)
### User Donation Status & e-certificate download
![out (3)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/b7a21771-4690-4af8-81f9-df544dde7067)



### Hospital Login/Register Page
![out (7)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/14960228-e191-4b45-b1ab-f6a6f07b5beb)
### Hospital Dashboard
![out (18)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/9ae43e05-674b-4c6a-ab89-8f9eef00533a)
### Hospital Blood request status
![out (20)](https://github.com/aswinunnikrishnan/Online-Blood-Donation-Management-System/assets/76864166/5b80696a-8b62-4f57-9e30-459b26d75f8f)




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


