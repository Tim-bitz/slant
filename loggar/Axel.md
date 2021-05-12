Note to Ian; byter mellan svenska och engelska här hoppas det är ok. Skriver av någon anledning på engelska i kommentarerna på commits, har kopierat de kommentarerna till loggen vissa dagar.

29/4
-Vi har satt ihop vårt gruppkontrakt.
-Vi har diskuterat grundläggande utseende och jobbat fram en mockup.

30/4
-Gruppen hade morgonmöte. Vi diskuterade vad som behöver göras först och skapade sprintmål i Trello.
-Jag skapade temat "SLANT", och skapade en grundstruktur baserat på våra mockups. Satte ihop index.php, header.php, footer.php + styling
-Jobbat vidare med mer detaljer i headern som loggan och menyer.

3/5
-Haft gemensamt gruppsamtal i princip hela dagen och försökt rätta till några problem på GitHub. 
-T.ex hade vi inte woocommerce uppe på GitHub så varje gång nån hämtade main tog man bort sin woocommerce lokalt.
-Vi löste med Ians hjälp problemet med .gitignore. För det första hade vi filändelsen .md på den. För det andra ignorerade den sig själv så den hängde inte med till GitHub.
-Slutligen satt vi och såg till att alla kom åt servern via filezilla
-Vi har fått upp senaste koden på servern, så header/footer/grundsidor är på plats.

4/5
-Skapat archive-product.php i slant-temat, och kopierat innehållet från woocommerce
-skapat en widget som ska innehålla meny med produktkategorier
-lagt in widgeten vid 'woocommerce_before_main_content'-hooken
-stylat menyn
-Fick problem med MAMP

5/5
-MAMP-problemet var att jag hade satt siteurl/home till local istället för localhost i min databas.

-created woo-functions.php because the file functions.php was getting to long
-woo-functions.php is included in functions.php
-woo-functions.php is for hooks and functions for the archive-products.php/taxonomy-product-cat.php-pages
-created taxonomy-product-cat.php which controlles pages for specific product categories

-Now the product category menu is visable even on the specific category pages. disabled setting in widget to not only show children of the current category

-added category menu ( 'printNavMenu' ) with 'custom_before_main_content'-hook instead
-removed 'woocommerce_get_sidebar' from 'woocommerce_sidebar'-hook
-changed pagination to be printed within a div that centers the content
-css styling on shop-pages

-changes to styling on Shop pages
-added a specific header to archive-products.php to get specific css-files (temporary fix)

6/5
-Gått igenom vilka krav vi har kvar på hemsidan
-Pratat med Ian och förtydligat vad som menas med att utnyttja cache
-Skapat mobilanpassad header

7/5
-Forsatt mobilanpassa headern. Nu har den en fungerande collapse-meny
-Efter lunch har localhost fungerat sådär. Ibland funkar hemsidan ibland får jag felet: "The requested URL /index.php was not found on this server" Funkar av och till utan att jag ändrar nåt, så gissar på att MAMP krånglar

10/5
-Lagt in if-satser med conditional tags för css-länkningen. Så specifika sidor hämtar specifik styling.
-Stylingen på shoppingsidan såg märklig ut så rättade till det i css. Tog bort punkter framför li-element och satte max-bredd på produktkort och padding på produktcontainern.
-removed divs I added earlier on archive-products.php, and instead styled the divs the original archive-products.php creates (primary, main and header)
-pagination is now larger on smaller screens
-moved styling for main divs (main and .flex-wrapper) to style.css

11/5
-Gruppen har gått igenom kraven och sett till att vi uppfyller allt.
-Fixat detaljer i stylingen gemensamt
-Jag har lagt in padding på cart/checkout/account-sidorna så de följer samma struktur som resten av siten
-Vi har gått igenom vad vi vill ta upp under presentationen och delat upp vem som tar vad
