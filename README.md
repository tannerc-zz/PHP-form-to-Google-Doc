PHP-form-to-Google-Doc
======================

Very simple way to create an email subscription form that sends email addys to a Google Doc.

== TO USE ==

• First open the form.php document and change "yourwebsite" string on line 16 to include your URL (minus www. and .com/.net/.whatever).

• Edit where you're storing the aciton.php file in your form submission as well (I like to use .htaccess to hide the .php on the action file).

• Open action.php and add your Google Excel sheet ID to line 15 where it reads "YOUR-FORM-ID". You can get this ID by opening your Google Excel doc in a web browser and copying everything after "?key=". Your Google Doc can be set to private viewing, as no public users will need to actually access this document but you.

• Test it out!