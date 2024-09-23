# Website Shop - Product Showcase and User Management

This project is a simple website shop where users can add products, view them on the webpage, and manage user registration and login. It is built using PHP for the backend and MySQL for the database.

## Features

- Add new products to display on the website
- User registration and login system
- Product management for administrators
- Responsive design for better user experience
- Secure authentication with hashed passwords

## Screenshots

<!-- You can add screenshots of your project here for a visual overview -->

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript (optional)
- **Authentication**: PHP Sessions

## Installation

Follow the steps below to set up and run this project on your local machine.

### Prerequisites

Ensure you have the following software installed:

- [XAMPP](https://www.apachefriends.org/index.html) (or any LAMP/WAMP/MAMP stack) 
- A web browser (e.g., Chrome, Firefox)
- Git (optional, for version control)

### Steps to Install

1. **Clone the Repository** (Optional)

   If you are using Git, clone this repository by running the following command:

   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   ```

   Or download the ZIP file from GitHub and extract it to your server directory.

2. **Move Project to Web Server Directory**

   Move the project folder to your web server's root directory:

   - For XAMPP, move the folder to `C:/xampp/htdocs/your-project-name`.
   - For WAMP, move it to `C:/wamp/www/your-project-name`.

3. **Create a MySQL Database**

   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a new database named `shop_db`.
   - Import the provided SQL file (`shop_db.sql`) located in the `database/` folder into your newly created database.

4. **Configure the Database Connection**

   Open the `config.php` file (or wherever your database configuration is located) and update the following credentials according to your MySQL setup:

   ```php
   <?php
   $servername = "localhost";
   $username = "root";      // Change if you're not using the default 'root' user
   $password = "";          // Change if you have a MySQL password
   $dbname = "shop_db";     // Ensure this matches the database name you created
   ?>
   ```

5. **Start the Apache and MySQL Services**

   - Open the XAMPP (or WAMP/MAMP) control panel.
   - Start both the **Apache** and **MySQL** services.

6. **Access the Website**

   Open your web browser and go to:

   ```url
   http://localhost/your-project-name/
   ```

   You should now be able to access the shop and register/login functionality.

## Usage

1. **Add Products**: Once logged in as an admin, navigate to the "Add Product" page and fill out the form to add a new product.
2. **User Registration/Login**: Use the registration page to create an account, and login to access user features.
3. **Product Display**: All added products will be displayed on the main webpage for users to view.

## Folder Structure

```bash
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── config.php
├── index.php
├── login.php
├── register.php
├── add_product.php
├── product_list.php
├── database/
│   └── shop_db.sql   # Database dump file
└── README.md
```

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature-branch-name`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch-name`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
\```

---
