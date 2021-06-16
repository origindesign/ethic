<?php

require_once 'vendor/campaignmonitor/createsend-php/csrest_subscribers.php';

$success_message = 'You\'ve been signed up to our email list.';
$error_message_general = 'There was a problem signing you up, please try again.';
$error_message_format = 'Please enter a valid email address.';

if ( $_SERVER[ 'REQUEST_METHOD' ] !== 'POST' ) {
  renderResponse( true, $error_message_general );
}
else {

  $api_key = 'HClon45BCQ2o89YXGqizwvHvxci6FrF1AjZJIG3NdoLV3yxk2Izi4RIJI2IGIZx7bfNJUnLZsAQIjH/eKtpE5f4SAwbhfbtjUNWMpTOsmn38+n0OUGhbHRev7Q3onMsGtAMRwA8u56byeji+jTYWzg==';
  $list_id = '458bfea33dc51790ef3690a75b830656';

  $email = array_key_exists( 'email', $_POST ) ? $_POST[ 'email' ] : '';
  $email = cleanInput( $email );

  if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    try {
      $auth = array(
        'api_key' => $api_key
      );
      $wrap = new CS_REST_Subscribers( $list_id, $auth );

      $result = $wrap->add( array(
        'EmailAddress' => $email,
        'ConsentToTrack' => 'yes',
        'Resubscribe' => true
      ) );

      if ( $result->was_successful() )
        renderResponse( false, $success_message );
      else
        renderResponse( true, $error_message_general );
    }
    catch ( Exception $e ) {
      renderResponse( true, $error_message_general );
    }
  }
  else {
    renderResponse( true, $error_message_format );
  }

}

function renderResponse( $error, $message ) {
  header( 'Content-Type: application/json' );
  $result = [
    'error' => $error,
    'message' => $message
  ];
  echo json_encode( $result );
  die();
}

function cleanInput( $data ) {
  $data = trim( $data );
  $data = stripslashes( $data );
  $data = htmlspecialchars( $data );
  return $data;
}