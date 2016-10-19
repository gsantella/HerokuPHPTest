<?php
echo "What the heck";
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-e245d73733d3ad8b53b97992c459d66e');
$domain = "sandbox53f0c8753fe74538aa7780fcc98bbf94.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox53f0c8753fe74538aa7780fcc98bbf94.mailgun.org>',
                        'to'      => 'David Keller <dkeller16x@yahoo.com>',
                        'subject' => 'Hello David Keller',
                        'text'    => 'Congratulations David Keller, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
   echo "HEYYYYYYY";