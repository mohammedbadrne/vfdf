 <?php
// SMTP SETUP 
$A29SMTP = [

      [
      "SMTP Server"	=> "mail.tnt21.com", //Smtp Server
      "Username" 	=> "ducharmes@tnt21.com", //Smtp Username / ID
      "Password" 	=> "tnt21", //Smtp Password
      "Port"     	=> "587", //Smtp Port
      "tls"     	=> "TLS", //Smtp Authentication
     ],
  
  
    /*SMTP FORM COPY FROM HERE
    
      [
      "SMTP Server"	=> "", //Smtp Server
      "Username" 	=> "", //Smtp Username / ID
      "Password" 	=> "", //Smtp Password
      "Port"     	=> "", //Smtp Port
      "SSL/TLS"     => "", //Smtp Authentication
     ],
     
    */

];


$A29SETUP = [
      // Key
	  // Identity "DO NOT SHARE THIS KEY", This Software Will Send Your IP, HWID, KEY.
      // Once it Detects Seccond attemp to Log in, Your Key Will Be Automatically DISABLED/BANNED & you will be Kicked out From Group, and we will no longer give any help or take questions.
      // No Replacement for BANNED / DISABLED Key !
      "Key"                    => "jDe98Nk4DZx09Rl7bmg8aP5gahCAw8AzyGJfUgnhP85x7FMISJwAyKMpqkR3wZFCkzqrIFQSWc3gHfCnEZQeOKjgulC8YfhjN666",
  
      // Time
      "Time"                   => "America/Adak",
  
      // Sending Delay Time
	  // Sleeptime is delay time during emails being sent. For example: Sleeptime = 2, meaning delay time during every email sending is 2 seconds 
	  // Mail limit, there are counted email limit for every Delay Limit to run. For example: Mail Limit = 10, then it means every 10 emails will be delayed by Delay Limit
	  // Delay Limit is a delay between every Mail Limit . For example: Delay limit = 3, meaning delay time during every mail limitation is 3 seconds
	  //"sleeptime"            => 2, // Delay Duration per Email
      //"Mail Limit"           => 10, // Counted Emails for Delay Limit
      //"Delay Limit"          => 5, // Delay Limit for Mail Limit
	  "Sleeptime"              => 1, // Delay Duration per Email
      "Mail Limit"             => 10, // Counted Emails for Delay Limit
      "Delay Limit"            => 20, // Delay Limit for Mail Limit
      

    
      //  E-Mail Identity
      "From Name"              => "support", // From Name Your Message .
      "From Mail"              => "ducharmes@tnt21.com", // From Mail Your Message . Use [RANDSTRING] for from mail
        "Mail Subject"           => "notice", // Subject Your Message .
  
      // Email Letter 
      "Letter"                 => "Files/File's Letters/letter.html", // Letter to Send .
  
      // Mail List / Leeds 
      "Mail List / Leeds"      => "Files/File's Maillists/list.txt", // Maillist to Send .
  
      // Attachment 
      "Send Attachment"        => 0, // 0 = No (Disabled sending attatchment ) | 1 = Yes (Send Attachment)
      "File Attachment"        => "Files/File's Attachments/", //File Attachment to Send .
  
      // Link Shortcut 
       "Link"                   => ["https://google.com","https://yahoo.com","https://aol.com","https://hotmail.com"], // Your Link if You Put [LINK] in your Letter .
];