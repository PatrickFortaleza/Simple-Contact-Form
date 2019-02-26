# Simple-Contact-Form
A Simple contact form with PHP.


A contact form with a name, email and message input. Form is set to POST, directed to processor.php where each input is validated using isset() and preg_match.

Processor.php will send the formatted form contents to the desired email using the mail() function.
