<?php
if ( ! class_exists( 'User_PDF_Form' ) ) {
    class User_PDF_Form {

        public static function init() {
            add_shortcode( 'user_pdf_form', array( __CLASS__, 'render_form' ) );
            add_action( 'init', array( __CLASS__, 'handle_form_submission' ) );
        }

        public static function render_form() {
            ob_start();
            include plugin_dir_path( __FILE__ ) . '../templates/form-template.php';
            return ob_get_clean();
        }

        public static function handle_form_submission() {
            if ( isset( $_POST['submit_form'] ) ) {
                $name  = sanitize_text_field( $_POST['name'] );
                $email = sanitize_email( $_POST['email'] );

                // Generate PDF
                require_once plugin_dir_path( __FILE__ ) . '../vendor/autoload.php'; // Assuming Composer autoload is used
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->WriteHTML( "<h1>User Details</h1>" );
                $mpdf->WriteHTML( "<p>Name: $name</p>" );
                $mpdf->WriteHTML( "<p>Email: $email</p>" );
                $pdf_content = $mpdf->Output( '', 'S' );

                // Get settings
                $options = get_option( 'user_pdf_form_settings' );
                $send_email = $options['send_email'] ?? 'yes';

                // Send email or download PDF
                if ( $send_email === 'yes' || $send_email === 'both' ) {
                    wp_mail(
                        $email,
                        'Your PDF',
                        'Please find your PDF attached.',
                        '',
                        array( $pdf_content )
                    );
                }

                if ( $send_email === 'no' || $send_email === 'both' ) {
                    header( 'Content-Type: application/pdf' );
                    header( 'Content-Disposition: attachment; filename="user-details.pdf"' );
                    echo $pdf_content;
                    exit;
                }
            }
        }
    }
}
