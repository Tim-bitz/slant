30/4
 Jag har planerat med gruppen, sammarbetat kring design och gemensamma beslut.
 Individuellt så har jag skapat de första produkterna, attributerna och tagit fram en logga.
3/5
 idag har vi suttit och arbetat tillsammans som grupp. Fixat med gitrepot och FTP.

4/5
 Efter morgonmöte med lite planering har jag skapat en kontakt sida som uppfyller alla kraven kopplade till kontaktsidan. Karta med huvudkontor samt fungerande kontaktformulär. Även börjat på butik sidan
5/5
 På förmiddagen satt jag med Linda och Ian och kollade på hur man löser karusellbildspel och custom post field. 
 Jag har även satt upp första custom fältet och fortsatt arbetet  med butik sidan.

6/5
 butik sidan fungerar med karta och custom fält. fixade så att blogginlägg länkar till produkter. satte upp karuselen med linda och ian. Fick mer hjälp av ian med att kolla på cache och optimering. Vi svärmat några problem som grupp också, fixat i trello, kollat över krav och förfinat backlog.

 7/5 Har kollat igenom bildstorlekerna på hemsidan. lyckades till slut att få slidsen på första sidan att länka till rätt kampanjer, med hjälp av nya custom post types och get_field('kampanjfalt') i loopen. Har mobilanpassat lite och suttit lite med gruppen. 






Egna anteckningar:

echo get_post_meta( get_the_ID(), 'plats', true );
Skickar ut posten 'plats' med det id som stämmer överens med loopen.
'plats' är i det här fallet en custom post field.

get_field($selector, [$post_id], [$format_value]);
Det skulle också gå att använda sig utav denna funktionen, då skulle det räcka att skriva get_field('plats); iom att andra parametern, som default är nuvarande id.