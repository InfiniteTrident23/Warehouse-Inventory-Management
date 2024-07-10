# Inventory Inventory and Employee Management System
<p align="center"><img src="/image/footer_img5.png"></p>
Welcome to my Warehouse Inventory Management project, where I delve into the application of a Relational Database Management System (RDBMS) to streamline and optimize the processes associated with inventory control. In this exploration, the focus is on leveraging the structured and organized nature of an RDBMS to enhance the overall efficiency of warehouse operations. The project aims to provide a robust solution for managing stock levels, reducing errors, and improving decision-making processes. By integrating the power of an RDBMS, this initiative seeks to offer a scalable and reliable framework that not only ensures real-time visibility into inventory but also contributes to the seamless orchestration of various warehouse activities. Join me on this journey to uncover the potential of database technology in revolutionizing warehouse inventory management.

***(All files are required to be in the same directory in order for complete execution of the project)***

## Specifications of Project
- HTML and CSS for front End
- PHP 8.3.4 for Backend connectivity
- Database using MySQL Workbench
- I have used XAMPP v3.3.0 for hosting the server

## Entity Relation Diagram for the project
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/fa21a3ec-0d37-4185-ba02-be7a155d4207)

## Relational Model
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/9faee510-9fff-4e74-993f-1c7aadfeb95e)
***
***SQL END***
- **You will have to run the following commands in MySQL to create the database in use:**
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/f5413667-505b-4b74-9a15-8765d2451ba1)
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/6e62605a-b266-4173-bdd0-72f86f435d8e)

- **For complete utilization of functionalities, the following Triggers would be required:**

  - **employee_deleted_trigger OR manager_deleted_trigger**
    - This triggered is used when an employee quits or is fired.
    - This trigger takes the info of the employee that was fired, and stores it an “Ex_employee” table for any further use, when the employee data is deleted from the Manager or Employee table.
    - To achieve this, we have to make 2 different triggers for each, Manager and Employee table, for when data is removed from them, this trigger also inserts the designation and date of removal of the employee to keep a well-maintained record.
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/9e239d85-f96f-4b01-bcb3-f15d556c2346)

  - **inventory_deleted_trigger**
    - When an inventory item is deleted from the inventory database, this means the item was completely sold out.
    - Hence, this trigger stores the info of the item which was sold for calculation the total sale of goods from a warehouse in the end.
![image](https://github.com/InfiniteTrident23/Warehouse-Inventory-Management/assets/128295541/4c308a1d-c3af-4332-8c82-bed1feaa8786)
