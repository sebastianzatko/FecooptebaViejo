


<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);

if (! $error) {
    $error = 'Oops! An unknown error happened.';
}
?>
<!DOCTYPE html>
<!--
Copyright (C) 2013 peter

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="icon" href="admin/favicon.png" type="admin/image/x-icon"/>
        <title>Secure Login: Error</title>
        <link rel="stylesheet" href="admin/styles/main.css" />
        <link rel="stylesheet" href="admin/stylee.css" />
       <style>
           .logo287{
               
           }
       </style>    
    </head>
    <body>
    <section class="error404">
        <img src="admin/images/202381_poster_.png" class="errorimg" />
        <div class="errorcaja">
            <h2>Houston tenemos un problema...</h2>
            <p class="error"><?php echo $error; ?></p>  
            <input class="errorvolver" type="button" value="VOLVER" onclick="window.history.back()" name="action"/>
        </div>
        </section>    
    </body>
</html>
