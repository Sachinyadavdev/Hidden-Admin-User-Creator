<?php
// Save the setting when the form is submitted
if (isset($_POST['hu_plugin_visibility_submit'])) {
    $hide_plugin = isset($_POST['hu_hide_plugin']) ? 'yes' : 'no';
    update_option('hu_hide_plugin', $hide_plugin);
}
$plugin_hidden = get_option('hu_hide_plugin', 'yes');
?>

<div class="wrap">
    <h1>Hidden Plugin Admin Page</h1>
    <p>This is the secret dashboard page. Only accessible via direct URL.</p>

    <form method="post">
        <label>
            <input type="checkbox" name="hu_hide_plugin" <?php checked($plugin_hidden, 'yes'); ?>>
            Hide plugin from Plugins list
        </label>
        <br><br>
        <input type="submit" name="hu_plugin_visibility_submit" class="button button-primary" value="Save">
    </form>
</div>
