
# Fingerprint Sensor Based Biometric Attendance Management System

## Overview:
Biometric Attendance systems are commonly used systems to mark presence in offices and schools. This project aims to create a reliable and secure attendance tracking system using a fingerprint sensor and NodeMCU. The system is designed for applications in schools, colleges, business organizations, and offices where accurate attendance marking with timestamps is crucial. With the help of this system schools/colleges can effectively reduce lot of paper work and efforts and thier time.

## Key Features:
- Utilizes fingerprint sensor for user authentication, enhancing security.
- Integrates NodeMCU for interfacing with hardware components.
- Displays Roll Number or other info on an LCD display.
- Real-time clock (RTC) module ensures accurate timestamping.
- Web-based interface for managing and viewing attendance records.

## Hardware Components:
- Fingerprint sensor
- NodeMCU
- LCD Display
- RTC Module


## Software Components:
- HTML, CSS, JavaScript for web interface development.
- PHP for server-side scripting.
- MySQL database for storing attendance data.

## Functionality:
- Fingerprint Authentication: Users can mark attendance by scanning their fingerprints.
- LCD Display: Displays real-time attendance information.
- Web Interface: Provides a user-friendly interface for administrators to manage attendance records.
- Database Integration: Attendance records are stored securely in a MySQL database.

## File Structure:

### 1. Arduino Code:
- **Files for NodeMCU/main.ino**: Contains the main Arduino sketch for interfacing with the fingerprint sensor, NodeMCU, LCD display, and RTC module.

### 2. Web Interface:
- **index.php**: The main html/php file for the web interface.
- **partials/css**: CSS folder contains files for styling the web pages.
- **all php files**: Different PHP files for different modules.
- **temp.php**: Takes the data from NodeMCU & perform preprocessing based on the provided information.
- **table2excel.js**: JavaScript file for generating reports.



### 3. Database:
- **database.sql**: SQL script for creating the necessary tables and schema for the MySQL database.

### 4. Documentation:
- **README.md**: This file, containing project overview, installation instructions, usage guide, etc.



## Installation:
1. Clone or download the repository.
2. Upload the necessary code to the NodeMCU. 
- 'Files for NodeMCU' folder contains an .INO file which authenticate stored fingerprints & give information to the url using http get method. 
3. Set up the MySQL database with the provided schema.
- database.sql file contains database schema.
4. Configure the PHP scripts for database communication.
5. Setup all the files  properly.
- Maintain the folder or files hierarchy. 
6. Run the system on localhost or online server.


## Usage:
1. Power up the system.
2. Users scan their fingerprints to mark attendance.
- Initially teacher will authenticate the system & based on currect stored timetable information further attendance will be recorded for that teacher->subject->timeslot.
- After teacher, students can place thier finger on fingerprint sensor & LCD display will show  the marked attendance ID.
3. Attendance can only be records in given timeslot only, based on timetable.

4. Attendance information will send through NodeMCU to website url & then with proper processing information we store it in the database.

5. Administrators can access the web interface to view and manage attendance records.


## Support:
For any questions or issues, please open an issue on GitHub or contact Haridas Khmabe at haridaskhambe2003@gmail.com
