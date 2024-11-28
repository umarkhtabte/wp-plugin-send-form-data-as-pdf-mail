# User Form Data in PDF Send Email or Download

A WordPress plugin that allows you to create a form that generates a PDF from user details and sends it via email or allows direct download.

## Description

This plugin provides a convenient way to create a form that collects user data, generates a PDF using the user's details, and sends it via email or allows direct download. It uses the `mpdf` library to generate the PDF and the `wp_mail` function to send the email. 

## Installation

1. Download the plugin from the [Repo Link](https://github.com/umarkhtabte/wp-plugin-send-form-data-as-pdf-mail) or clone the repository.
2. Upload the `user-pdf-form` directory to the `/wp-content/plugins/` directory of your WordPress installation.
3. Activate the plugin through the WordPress admin dashboard.

## Usage

1. After activating the plugin, a new menu item will appear under the "Tools" menu in the WordPress admin dashboard.
2. Click on the "User Form" menu item to access the form creation page.
3. Copy the Form Shortcode `[user-pdf-form]` and add where you want to show form.
4. Submit the form to generate the PDF and send it via email or allow direct download.

## Configuration

The plugin allows you to configure the email settings. To access the settings, go to the WordPress admin dashboard and click on the "User Form" menu item.

## Dependencies

- `mpdf` library (included in the plugin)
- `wp_mail` function (included in WordPress)

## Composer Dependencies

- `mpdf/mpdf` library (installed via Composer)

To install the `mpdf/mpdf` library using Composer, run the following command in the root directory of your plugin: 

## License

This plugin is licensed under the MIT License. See the [LICENSE](https://github.com/umarkhtabte/wp-plugin-send-form-data-as-pdf-mail) file for more information.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, please open an issue or submit a pull request.

## Author

[Umar Khtab](https://umarkhtab.wuaze.com/)

umarkhtab.te@gmail.com
