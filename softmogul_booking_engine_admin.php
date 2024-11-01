<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if(isset($_POST['submit_token'])){
    check_admin_referer( 'update-token'. get_option( 'softmogul_nonce_id' ) );
    if(!empty($_POST['softmogul_token'])){
        $token = filter_var(trim($_POST['softmogul_token']), FILTER_SANITIZE_STRING);
        if(base64_decode($token) == true && sizeof(explode("#end#", base64_decode($token))) == 2){
            $token = sanitize_text_field($token);
            update_option('softmogul_token', $token);
            $message = "Token updated";
        }
        else{
            $message = "The token format is not valid";
        }
    }
    else{
        delete_option('softmogul_token');
        $message = "Token updated";
    }
} else{
    $token = get_option('softmogul_token');
}

$random_nonce_id = rand(11111111, 999999999);
update_option( 'softmogul_nonce_id', $random_nonce_id )

?>

<div class="wrap">
    <?php
        echo "<h2>" . __( 'Softmogul Booking Engine Settings') . "</h2>";
    ?>

    <form name="oscimp_form" method="post">
        <?php wp_nonce_field( 'update-token'. get_option('softmogul_nonce_id'));?>
        <p><?php _e("Enter your softmogul token: " ); ?><input type="text" name="softmogul_token" value="<?php echo isset($token) ? $token : ""; ?>" size="60"></p>
        <p class="submit">
        <input type="submit" name="submit_token" value="<?php _e('Update token') ?>" />
        </p>
    </form>

    <?php
        if(isset($message)){ ?>
            <div class="updated"><p><strong><?php _e($message); ?></strong></p></div>
    <?php }
    ?>
</div>