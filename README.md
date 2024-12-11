# ElectronicsHub - E-Commerce Website for Electronics Gadgets

Welcome to ElectronicsHub, an open-source e-commerce web application that offers the latest trends in electronics gadgets. ElectronicsHub allows users to browse, review, and shop for gadgets in a seamless experience. From registering and logging in, to adding products to the cart and checking out, here’s an overview of the platform:

## Key Features:

### 1. **Registration & Login:**



- **Registration Page**: New users can register by providing their email, password, and confirming the password. Registration data is securely stored in the database.






- **Login Page**: Users can log in with their credentials to access personalized features.



#### Screenshots:


- **Registration Page**: 
![Screenshot 2024-12-11 185729](https://github.com/user-attachments/assets/2668815e-ce7e-497b-b2fa-217d740a7991)
- **Login Page**:



![Screenshot 2024-12-11 185622](https://github.com/user-attachments/assets/a1f3cb22-ffd1-496a-aa2b-4a61bf874352)


### 2. **Home Page:**

Upon successful login, users are redirected to the **Home Page**, where they can find:
- **Latest Trends**: A section displaying the latest and popular electronic gadgets, promotions, and special offers.

![Screenshot 2024-12-11 185821](https://github.com/user-attachments/assets/ce99c2f5-47e6-48ad-aa42-a5a4b7ca6d35)

- **Customer Reviews**: Customers can read and write reviews for various products.

![Screenshot 2024-12-11 185854](https://github.com/user-attachments/assets/a724f957-35b6-4266-85d3-740e8032114c)



- **Footer**: The footer provides information about the company, its mission, and contact details.


![Screenshot 2024-12-11 185917](https://github.com/user-attachments/assets/c465947a-d175-47c2-8f73-d4a35fd62699)












### 3. **All Shopping Products:**

 Users will find a dedicated section showcasing **All Shopping Products** for various purposes and at reasonable prices. This section includes:
- **Categories**: Products are organized into categories such as Mobile Phones, Laptops, Smartwatches, Headphones, and more.
- **Search & Filters**: Users can search for specific products or filter items based on price, category, and features.
- **Product Details**: Each product card includes:
  - Product Name
  - Description
  - Price
  - "Add to Cart" button for seamless shopping
  **Add to Cart**:
  
   Users can click on the “Add to Cart” button next to the product they wish to purchase.


  ![Screenshot 2024-12-11 185939](https://github.com/user-attachments/assets/e21b893d-6355-46bb-898d-e89bb4731303)







![Screenshot 2024-12-11 185957](https://github.com/user-attachments/assets/196064d6-61c3-4695-8b48-0d7a5828e03c)



### 4. **Shopping Cart & Checkout:**

- Users can click on the **Shop Icon** to view the product catalog. This page features various electronics gadgets at different price points.
- After adding products to the cart, users can click on the **Shop Now** button.


![Screenshot 2024-12-11 190445](https://github.com/user-attachments/assets/7d504686-d95a-465b-8193-efdc8a65cf50)

- **Checkout Page**: Users will be prompted to fill in their shipping address.


![Screenshot 2024-12-11 190536](https://github.com/user-attachments/assets/41acfd7f-682c-4db4-b7e6-3674ec912242)

- **Order Submission**: Data, including the user's address and selected products, will be stored in the database.
- After the order is placed, the user is redirected to a **Thank You for Shopping** page.


![Screenshot 2024-12-11 190555](https://github.com/user-attachments/assets/7c081267-5255-4196-a985-1ebb0da1d05f)



## Database Structure:

The platform uses MySQL to store data related to users and orders. Below is the database structure:

### Database Name: `rdx`

#### Table: `login`
```sql
CREATE TABLE login (
    E_mail VARCHAR(30),
    Passwod VARCHAR(20)
);
```

#### Table: `register`
```sql
CREATE TABLE IF NOT EXISTS register (
    E_mail VARCHAR(30),
    Password VARCHAR(20)
);
```

#### Table: `address`
```sql
CREATE TABLE Address (
    User_Name VARCHAR(20),
    E_mail VARCHAR(20),
    Passwod VARCHAR(20),
    Mobile_Number VARCHAR(20),
    Adress VARCHAR(20)
);
```

These tables handle user credentials, registration data, and address details securely.

---

## How to Set Up ElectronicsHub:

### Prerequisites:
- PHP 7.x or higher
- MySQL or MariaDB
- Apache (or any web server with PHP support)
- XAMPP/MAMP for local development

### Steps to Set Up:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Farook269/ElelctronisHub.git
   ```

2. **Create Database**:
   Create a new database in MySQL named `rdx` and create the tables using the provided SQL queries.
   

   ![Screenshot 2024-12-11 212358](https://github.com/user-attachments/assets/babc60ea-550a-4783-9f3d-0c883bfaa137)



3. **Run the Application**:
   Place the project files in the web server root directory and visit `http://localhost/electronicshub/`.

---

## Contributing:

ElectronicsHub is open-source, and we welcome contributions. Follow these steps:
1. Fork the repository.
2. Clone your fork.
3. Make your changes and commit them.
4. Push to your fork and submit a pull request.

---

## License:

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

**Happy Shopping with ElectronicsHub!**

For any inquiries or assistance, please feel free to reach out to us at (mailto:farookbashamulla269@gmail.com).
