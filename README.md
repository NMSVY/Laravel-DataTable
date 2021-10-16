!!!! Welcome !!!

FEATURES :
1. Backend validation for Add/Update Row. Uniq validation for mobile number.
2. Delete Row.
3. Set page Length for Data table as 5,10,20,50 or All rows.
4. Search records.
5. Export DataTable to CSV/EXCEL/PDF.
6. Copy Data Table.
7. Print Data Table.
![screen](https://user-images.githubusercontent.com/75966834/137461312-71c7333b-7447-4bd7-852f-4c2151ff443f.jpg)
<br>
Steps :<br>
1. Select Your Specific Directory in Visual Studio Code.
2. In Terminal Menu click on **New Terminal**
3. Run This Command in Terminal Window : **git clone https://github.com/NMSVY/DataTable.git **  this will clone project into your selected directory
    Or Download Zip file for code and extract it into your specific directory and open it in Visual Studio Code.
4. Run This Command in Terminal Window : **composer install** this will install all dependencies.
5. Run This Command in Terminal Window : **php artisan key:generate** this will generate key for your project in .env file.
6. Create Mysql Databse Named as **data_table**  Or (Create Mysql database with your DB name and edit **.env** file with your DB name. DB_DATABASE=Your DB Name)
7. Run This Command in Terminal Window : **php artisan migrate --seed** this will Create all needed tables with dummy data.
8. Run This Command in Terminal Window : **php artisan serve**

THATS ALL!!<br>
Enjoy!


