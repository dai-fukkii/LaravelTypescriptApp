<?php
    $error_message = Session::pull('error-message');
    $success_message = Session::pull('success-message');
?>

@if(isset($error_message))
    <p>{{ $error_message }}</p>
@endif
@if(isset($success_message))
    <p>{{ $success_message }}</p>
@endif