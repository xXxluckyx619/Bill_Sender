<?php
// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', getenv('IP'));
define('DATABASE_NAME', 'invoicemgsys');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','Bill Sender');
define('COMPANY_ADDRESS_1','713 G. Villasan bldg.');
define('COMPANY_ADDRESS_2','Burgos St. Sangitan East, Cabanatuan City');
define('COMPANY_ADDRESS_3','Nueva Ecija');
define('COMPANY_COUNTY','PH');
define('COMPANY_POSTCODE','3100');

define('COMPANY_NUMBER','Company No: 699400000'); // Company registration number
define('COMPANY_VAT', 'Company VAT: 690000007'); // Company TAX/VAT number

//Email configuration for SMTP
define('EMAIL_HOST', 'smtp.gmail.com');
define('EMAIL_PORT', '587');
define('EMAIL_USERNAME', 'ravtechtesting@gmail.com');
define('EMAIL_PASSWORD', 'izgtwjatvmtigwdw');
define('EMAIL_FROM', 'ravtechtesting@gmail.com');
define('EMAIL_NAME', 'RavTechnologies');
define('EMAIL_SUBJECT', 'Invoice Reminder');
define('EMAIL_BODY_INVOICE', 'Thank you for your business! Please find your invoice attached.');
define('EMAIL_BODY_QUOTE', 'Thank you for considering our services! Please find your quote attached.');
define('EMAIL_BODY_RECEIPT', 'Thank you for your payment! Please find your receipt attached.');


// EMAIL DETAILS
define('EMAIL_FROM', 'sales@inms.ccc'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'Invoice Mg System'); // Email from address
define('EMAIL_SUBJECT', 'Invoice default email subject'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice default body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Quote default body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Receipt default body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'B'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '0001'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Asia/Manila'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', '₱'); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '12'); // This is the percentage value

define('PAYMENT_DETAILS', 'Invoice Mg System.<br>Sort Code: 00-00-00<br>Account Number: 12345678'); // Payment information
define('FOOTER_NOTE', 'Invoice Management System');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>