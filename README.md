# How to test locally 


1. Install XAMMP/WAMP
2. Create new accounts
3. The Admin-creation page can only be accessed
by a hidden URL not available on landing
(create_admin.php)
3. Register users with only Gmail emails (I used PHP Mailer and pointed it to Gmail's SMTP)
4. For password reset purposes -- check No. 3
5. Patients can book appointments with the medical team
6. Medical staff can check appointments based on their departments
7. Admin can view users and create new ones
8. Patients can make payments for appointments, using the following dummy details:
Card Number: 5531 8866 5214 2950
cvv: 564
Expiry: 09/22
Pin: 3310
otp: 12345

Bank Details
Access Bank
Account number: 0690000031
otp: 12345


9. Medical Staff can view appointments in their departments and see who has made payments or not
10. Admin can also see list of appointments and payments made.


TEST ACCOUNTS: 
A. user: admin
   password: 1234
   
   patient
   user: dare
   password: !@#qaz123
   
   staff
   user: omolola
   password: 1234
   
11. Patients MUST book appointments first BEFORE making payments for proper verification.


### Live link => https://adura.xyz/hospital/