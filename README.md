# VenodeMCU-Laravel: Backend for IoT Vending Machine

This project serves as the backend for the **VenodeMCU-ESP8266** IoT vending machine, built using **Laravel**. The backend manages RFID card registrations, transaction processing, and provides a web interface for monitoring the system.

## Tech Stack

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300000f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge)
![AJAX](https://img.shields.io/badge/ajax-00BFFF?style=for-the-badge)

## Features

- **Automatic RFID Registration**: Users can register new RFID cards by simply scanning them with the RFID reader. The system automatically retrieves and saves the ID to the database.
  
- **Transaction History**: Displays a real-time view of transaction history.
  
## System Overview

The Laravel backend handles all API requests from the **NodeMCU ESP8266**. The system processes RFID card validation, transaction logging, and provides a web interface for managing and monitoring these processes.

### Communication with the ESP8266
The NodeMCU communicates with this Laravel backend using RESTful API endpoints for transaction processing. The integration allows for seamless validation of RFID cards and retrieval of transaction data.

## Installation

### Prerequisites
- PHP 8.x
- Composer
- MySQL 5.x

### Steps

1. **Clone the Repository**
    ```bash
    git clone https://github.com/sfmuazam/VenodeMCU-Laravel.git
    cd VenodeMCU-Laravel
    ```

2. **Install Dependencies**
    ```bash
    composer install
    ```

3. **Environment Setup**
    Create a `.env` file by copying `.env.example`:
    ```bash
    cp .env.example .env
    ```
    Update your database credentials and other configurations in `.env`:
    ```plaintext
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**
    Create the necessary database tables by running migrations:
    ```bash
    php artisan migrate --seed
    ```

6. **Serve the Application**
    Start the Laravel development server:
    ```bash
    php artisan serve
    ```
    The application will be accessible at `http://localhost:8000`.

## Connecting to the ESP8266
This backend is designed to work seamlessly with the **VenodeMCU-ESP8266** project. The NodeMCU will send requests to this API to validate RFID cards and log transactions.

### See the ESP8266 Project Here
For more details on the IoT vending machine implementation, refer to the ESP8266 project:  
[VenodeMCU-ESP8266](https://github.com/sfmuazam/VenodeMCU-ESP8266)
