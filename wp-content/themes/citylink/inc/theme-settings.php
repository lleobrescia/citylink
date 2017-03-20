<?php
/**
 * Addging additional setting for theme
 *
 * @package Citylink
 */

// Hook for adding admin menus
add_action('admin_menu', 'citylink_add_pages');

// action function for above hook
function citylink_add_pages()
{

    // Add a new top-level menu (ill-advised):
    add_menu_page(esc_html__( 'Theme Settings', 'citylink' ), esc_html__( 'Theme Settings', 'citylink' ), 'manage_options', 'citylink-top-level-handle' );

    // Add a submenu to the custom top-level menu:
    add_submenu_page('citylink-top-level-handle', esc_html__( 'Contact', 'citylink' ), esc_html__( 'Contact', 'citylink' ), 'manage_options', 'citylink-top-level-handle', 'citylink_toplevel_page');

    // Add a submenu to the custom top-level menu:
    // add_submenu_page('citylink-top-level-handle', __('Test Sublevel', 'menu-test'), __('Test Sublevel', 'menu-test'), 'manage_options', 'sub-page', 'citylink_sublevel_page');
}



function citylink_toplevel_page()
{
       //must check that the user has the required capability
    if (!current_user_can('manage_options')) {
        wp_die( esc_html__('You do not have sufficient permissions to access this page.', 'citylink') );
    }

    // variables for the field and option names
    $hidden_field_name = 'citylink_submit_hidden';
    $opt_facebook = 'citylink_facebook';
    $data_field_facebook = 'citylink_facebook';
    $opt_twitter = 'citylink_twitter';
    $data_field_twitter = 'citylink_twitter';
    $opt_instagram = 'citylink_instagram';
    $data_field_instagram = 'citylink_instagram';
    

    // Read in existing option value from database
    $opt_val_facebook = get_option( $opt_facebook );
    $opt_val_twitter = get_option( $opt_twitter );
    $opt_val_instagram = get_option( $opt_instagram );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if (isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y') {
        // Read their posted value
        $opt_val_facebook = $_POST[ $data_field_facebook ];
        $opt_val_twitter = $_POST[ $data_field_twitter ];
        $opt_val_instagram = $_POST[ $data_field_instagram ];

        // Save the posted value in the database
        update_option( $opt_facebook, $opt_val_facebook );
        update_option( $opt_twitter, $opt_val_twitter );
        update_option( $opt_instagram, $opt_val_instagram );

        // Put a "settings saved" message on the screen

?>
<div class="updated"><p><strong><?php _e('settings saved.', 'citylink' ); ?></strong></p></div>
<?php
    }

    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . _e( 'Social Media', 'citylink' ) . "</h2>";

    // settings form
    
    ?>

<form name="form1" method="post" action="">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

<table class="form-table">
  <tbody>

    <tr>
      <th>
        <label for="<?php echo $data_field_facebook; ?>"><?php _e("Facebook:", 'citylink' ); ?> </label>
      </th>
      <td>
        <input type="url" class="regular-text" name="<?php echo $data_field_facebook; ?>" value="<?php echo $opt_val_facebook; ?>" size="20">
      </td>
    </tr>
    <tr>
      <th>
        <label for="<?php echo $data_field_twitter; ?>"><?php _e("Twitter:", 'citylink' ); ?> </label>
      </th>
      <td>
        <input type="url" class="regular-text" name="<?php echo $data_field_twitter; ?>" value="<?php echo $opt_val_twitter; ?>" size="20">
      </td>
    </tr>
    <tr>
      <th>
        <label for="<?php echo $data_field_instagram; ?>"><?php _e("Instagram:", 'citylink' ); ?> </label>
      </th>
      <td>
        <input type="url" class="regular-text" name="<?php echo $data_field_instagram; ?>" value="<?php echo $opt_val_instagram; ?>" size="20">
      </td>
    </tr>

  </tbody>
</table>


<hr />

<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes', 'citylink') ?>" />
</p>

</form>
</div>

<?php
}

// citylink_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
// function citylink_sublevel_page()
// {
//     echo "<h2>" . __( 'Test Sublevel', 'menu-test' ) . "</h2>";
// }

