<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <div style="text-align: center;">
         <img src="https://lh3.googleusercontent.com/EtiPf_JsNABAzFoI0Ia--Y04OXzJQrut4A3ULhzh3o6Kg3sY85VavEdMU3OlNH4TZs7nyiesFWiH0-cnTjHL-PpC6GtcAYEbLEMff-NrrAJADsbBjiYeptkZrgTIQRXVqQKAPAF1VjKAP261HO1DEJMdIFzC-83SIbUa7p6fS1ibb0-BzV7xuTEnDpckA4tz3G5Wjp5zlPCK588zUaqqeY2lkg9YDvoDTLUfLsW3o3OqmErioggccN6j3o5TPhXbFyVnJiN63bjX3OGhRGDmaVsuxgHNjJKtmNvA6E79OCPpUZtsgmTPeOcoPdy1XjhLJy2btJmCU9lwsXqcg5Z3t0ripUTOQSdwFfXoO8hoPZT4wHXDy9Xx8ljNKcUhseuAjME5O_HdorxmYf2rT2uTagxAQ9EXWkVcZfWpktPXvkeC6apySImsn4MOAx3TyuyFimqRWwzgYtmSKbFiUr8oPBymSV8XHxAfEmWf1F3UprlC4TMadcLbI4Dh4tvvqoFBfTP6IznSrHPya8zEt3zss1UAIWyJ6RAgsZwUS9heNSRhIEwjmWf5RbyblzwQZj7W-vLwzk32nIPFvT9U1AwhWm7S_O5QdPrBXz7gIcc=w622-h320-no" style="width: 200px;">
      </div>
      <div>
         <p>Cher membre,</p>
         <p>Vous recevez ce mail car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.</p>
         <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien ci-dessous.</p>
         <a href="{{url('/reset/'.$token_for_reset)}}">Réinitialiser le mot de passe</a>
         <p>Si vous n’avez pas demandé la réinitialisation du mot de passe, aucune autre action n’est requise.</p>
         <p>Merci,</p>
         <p>L’équipe DARI-LOC,</p>
      </div>
   </body>
</html>