<?php

require_once 'vendor/campaignmonitor/createsend-php/csrest_subscribers.php';

$success_message = 'You\'ve been signed up to our email list.';
$error_message_general = 'There was a problem signing you up, please try again.';
$error_message_format = 'Please enter a valid email address.';

if ( $_SERVER[ 'REQUEST_METHOD' ] !== 'POST' ) {
  renderResponse( true, $error_message_general );
}
else {

  $api_key = 'Hs1FGq/rKRkd+5STHSwAtZgvDE+KX0Dfj4iNiiFzcg0rylKF0m6clTQ+xQ+gVk2QGAy5dZUAP87pByqVI9Id8iKqnjFV22lwXVYq0Ing/U3ao6jaIQV/Ipz9GgMT0jCImxk3xHjSQJm1dLVEUFzbXg==';
  $list_id = '5879be54a3bfe81805da905b34e7e4be';

  $email = array_key_exists( 'email', $_POST ) ? $_POST[ 'email' ] : '';
  $email = cleanInput( $email );
  $firstname = array_key_exists( 'firstname', $_POST ) ? $_POST[ 'firstname' ] : '';
  $firstname = cleanInput( $firstname );
  $lastname = array_key_exists( 'lastname', $_POST ) ? $_POST[ 'lastname' ] : '';
  $lastname = cleanInput( $lastname );

  if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    try {
      $auth = array(
        'api_key' => $api_key
      );
      $wrap = new CS_REST_Subscribers( $list_id, $auth );

      $result = $wrap->add(
        array(
          'EmailAddress' => $email,
          'CustomFields' => array(
            array(
              'Key' => 'FirstName1',
              'Value' => $firstname
            ),
            array(
              'Key' => 'LastName1',
              'Value' => $lastname
            )
          ),
          'ConsentToTrack' => 'yes',
          'Resubscribe' => true
        )
      );

      if ( $result->was_successful() )
        // $success_message
        // $result
        renderResponse( false, $firstname );
      else
        renderResponse( true, $result );
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
