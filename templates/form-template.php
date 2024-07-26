<form id="user-pdf-form" method="post">
    <label for="name"><?php esc_html_e( 'Name:', 'user-pdf-form' ); ?></label>
    <input type="text" name="name" id="name" required>
    <label for="email"><?php esc_html_e( 'Email:', 'user-pdf-form' ); ?></label>
    <input type="email" name="email" id="email" required>
    <input type="submit" name="submit_form" value="<?php esc_attr_e( 'Submit', 'user-pdf-form' ); ?>">
</form>
