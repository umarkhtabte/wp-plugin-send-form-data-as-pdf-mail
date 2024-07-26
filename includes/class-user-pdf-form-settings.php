<?php
if ( ! class_exists( 'User_PDF_Form_Settings' ) ) {
    class User_PDF_Form_Settings {

        public static function init() {
            add_action( 'admin_menu', array( __CLASS__, 'add_settings_page' ) );
            add_action( 'admin_init', array( __CLASS__, 'register_settings' ) );
        }

        public static function add_settings_page() {
            add_options_page(
                'User PDF Form Settings',
                'User PDF Form',
                'manage_options',
                'user-pdf-form-settings',
                array( __CLASS__, 'settings_page_html' )
            );
        }

        public static function register_settings() {
            register_setting( 'user_pdf_form_settings', 'user_pdf_form_settings' );
        }

        public static function settings_page_html() {
            ?>
            <div class="wrap">
                <h1><?php esc_html_e( 'User PDF Form Settings', 'user-pdf-form' ); ?></h1>
                <form method="post" action="options.php">
                    <?php
                    settings_fields( 'user_pdf_form_settings' );
                    do_settings_sections( 'user_pdf_form_settings' );
                    $options = get_option( 'user_pdf_form_settings' );
                    ?>
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'Send Email:', 'user-pdf-form' ); ?></th>
                            <td>
                            <select name="user_pdf_form_settings[send_email]">
                            <option value="yes" <?php selected( 'yes', $options['send_email'] ?? '' ); ?>><?php esc_html_e( 'Yes', 'user-pdf-form' ); ?></option>
                            <option value="no" <?php selected( 'no', $options['send_email'] ?? '' ); ?>><?php esc_html_e( 'No', 'user-pdf-form' ); ?></option>
                            <option value="both" <?php selected( 'both', $options['send_email'] ?? '' ); ?>><?php esc_html_e( 'Both', 'user-pdf-form' ); ?></option>
                        </select>
                            </td>
                        </tr>
                    </table>
                    <?php submit_button(); ?>
                </form>
            </div>
            <?php
        }
    }

    // Initialize the settings class
    add_action( 'plugins_loaded', array( 'User_PDF_Form_Settings', 'init' ) );
}
