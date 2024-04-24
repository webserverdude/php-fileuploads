# File Upload Web App

This is a simple PHP web application for uploading files, built with Bootstrap for the frontend.

## Features

- **Upload Page:** Allows users to upload files.
- **File Display Page:** Displays all uploaded files.

## Prerequisites

- PHP (>= 8.2.18)
- Web server (nginx/1.22.1)
- Bootstrap (included via CDN)
- 

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/file-upload-web-app.git
    ```

2. Ensure that your web server is configured to serve PHP files.

3. Create a directory named `uploads` in the project root directory to store uploaded files.</br>This directory must have write permissions for the web server.

    ```bash
    mkdir uploads
    chmod 777 uploads
    ```

4. Access the web app through your browser.

## Usage

- Access the index page (`index.php`) to navigate to the upload page or view uploaded files.
- On the upload page (`upload.php`), choose a file and click "Upload" to upload it.
- View all uploaded files on the files page (`files.php`).

## License

This project is licensed under the GNU GPLv3. 

## Acknowledgements

- [Bootstrap](https://getbootstrap.com/) - Frontend framework used for styling.
