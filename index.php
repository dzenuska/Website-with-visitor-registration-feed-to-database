<?php


function getIpAddress()
{
    $ipAddress = '';
    if (! empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipAddressList as $ip) {
            if (! empty($ip)) {
                $ipAddress = $ip;
                break;
            }
        }
    } else if (! empty($_SERVER['HTTP_X_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (! empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (! empty($_SERVER['HTTP_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED'];
    } else if (! empty($_SERVER['REMOTE_ADDR'])) {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }
    return $ipAddress;
  
}

$visit_ip=getIpAddress();

$visit_date=date('d-m-y h:i:s'); 

$sv = "localhost";

$username = "id20353124_leads_db_username";

$password = 'Edgars-Database1';

$db = "id20353124_website_leads";

$conn = new mysqli($sv, $username, $password, $db); 

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
} else {

} 

$sql = "INSERT INTO visitors (visit_date, visit_ip) VALUES ('$visit_date','$visit_ip')";

$conn->query($sql);

$conn->close(); 

?>

//
// HTML content - text and pictures
//


//start of the registration form
//values submitted are posted to database using display_leads.php
<div data-test='contact-form' id='contact-form-4' class='wp-block-jetpack-contact-form-container '>
<form action='display_leads.php' method='post' class='contact-form commentsblock wp-block-jetpack-contact-form'>
<script>
			( function () {
				const contact_forms = document.getElementsByClassName('contact-form');

				for ( const form of contact_forms ) {
					form.onsubmit = function() {
						const buttons = form.getElementsByTagName('button');

						for( const button of buttons ) {
							button.setAttribute('disabled', true);
						}
					}
				}
			} )();
		</script>
<div class="wp-block-jetpack-contact-form" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">
<div style="" class='grunion-field-name-wrap grunion-field-wrap'  >
<label
				for='firstname'
				class='grunion-field-label name'
				>First name<span>(required)</span></label>
<input
					type='text'
					name='firstname'
					id='firstname'
					value=''
					class='name  grunion-field' 
					required aria-required='true' />
	</div>

<label
				for='lastname'
				class='grunion-field-label name'
				>Last name<span>(required)</span></label>
<input
					type='text'
					name='lastname'
					id='lastname'
					value=''
					class='name  grunion-field' 
					required aria-required='true' />
	</div>

<div style="" class='grunion-field-email-wrap grunion-field-wrap'  >
<label
				for='email'
				class='grunion-field-label email'
				>Email<span>(required)</span></label>
<input
					type='text'
					name='email'
					id='email'
					value=''
					class='email  grunion-field' 
					required aria-required='true' />
	</div>



<div style="" class='grunion-field-telephone-wrap grunion-field-wrap'  >
<label
				for='phone'
				class='grunion-field-label telephone'
				>Phone</label>
<input
					type='text'
					name='phone'
					id='phone'
					value=''
					class='telephone  grunion-field' 
					 />
	</div>



<div style="" class='grunion-field-select-wrap grunion-field-wrap contact-form-dropdown-wrap ui-front'  >
<label
				for='howdidyouhearaboutus'
				class='grunion-field-label select'
				>How did you hear about us?</label>
	<select name='howdidyouhearaboutus' id='howdidyouhearaboutus' class='select  grunion-field contact-form-dropdown' >
		<option>Select one option</option>
		<option value='Search Engine'>Search Engine</option>
		<option value='Social Media'>Social Media</option>
		<option value='TV'>TV</option>
		<option value='Radio'>Radio</option>
		<option value='Friend or Family'>Friend or Family</option>
	</select>
	</div>
