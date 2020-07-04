<?php 
/*
    *Template Name: home
 */


 while( have_posts() ):

    the_post();
    the_content();

 endwhile;



//+410799275463
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Tuto API SMS</title>    
  </head>
  <body>
    <div id="app">
        <h1>API SMS</h1>
        <input id="messageAenvoyer" type="text" value="Hello ceci est un sms"/>
        <input id="numTelToElement" type="text" value="+336"/>
        <input type="button" value="ENVOYER SMS" onclick="envoyerSMS();"/>
    </div>
    
   

  </body>
</html>

<script>

function envoyerSMS(){
    const messageAenvoyer = document.getElementById("messageAenvoyer").value;
    const numTelToElement = document.getElementById("numTelToElement").value;

    const message = encodeURI(messageAenvoyer);
    const numTelTo = encodeURI(numTelToElement);

    const url = "XX";
    const auth = "XX";

    const myHeader = new Headers({
        'Content-Type': 'application/x-www-form-urlencoded',
        'Authorization':'Basic ' + btoa(auth)
    });

    const init = {
        method :'POST',
        headers : myHeader,
        mode : 'cors',
        body:"To="+numTelTo+"&From=%+13109549521&Body="+message
    }

    fetch(url, init)
        .then(response => console.log(response))
        .catch(error => console.log(error));

    
}

</script>

