# slant

## Projektgrupp BlomsterSLANTen
Susan Isaksson, Linda Gustafsson, Axel Sundin, Niklas Hådell, Tim Benjaminson
Utbildning: Webbutveckling för e-handle / Medieinstitutet, Göteborg
År 2021

## Beskrivning
Vår gruppuppgift var att skapa en e-shop för valfri produkt och ett eget skapat tema i Wordpress och med plugin Woocommerce. 

## Installation
### Vi har använt följande:
#### 1. Databas
Vi valde att använda MAMP
#### 2. Wordpress - version 5.7.1 (se)
#### 3. Visual code studio
#### 4. Tema
Vi skapade ett eget tema ('slant')
#### 5. Tillägg (plugins)
##### WooCommerce av Automattic - version 5.2.2
##### WP Migrate DB av Delicious Brains - version 2.0.1 
##### Social Media Widget av Acurax - version 3.2.10
##### Advanced Custom Fields av Elliot Condon - version 5.9.5
##### Custom Post Type UI av WebDevStudios - version 1.9.1
##### Hide Page and Post Title av Arjun Thakur - version 1.5.6

### Manual 

Denna manual täcker de funktioner som inte är standard i woocommerce och wordpress.  

#### Kampanjer: 

Under Kampanj fliken i adminpanelen hittar du alla kampanjer som för tillfället visas i slidern på startsidan. Där går du in för att lägga till eller ta bort en kampanj. Utöver titel, där du kan skriva vad du vill att din kampanj ska heta, kan du även lägga till en utvald bild, det är denna som kommer att visas i sliden. Längst ner på sidan ser du ett fällt med titeln kampanjlänk. Där kan du klistra in den URL som du vill länka kampanjen till. Exempelvis, om du har kampanj på en specifik produkt, så kan du kopiera in länken till produkten i fältet under kampanjlänk. Kunden kan då skickas till produkten genom att klicka på länken. 
Fältet kampanjlänk kommer ifrån tillägget ACF. 

Vi rekommenderar att man använder bildformatet 1500x500px. 

#### Butiker: 

För att skapa en ny butik, eller för att byta adress på en nuvarande butik, så går du in på fliken butiker i adminpanelen. Tryck på knappen, lägg till ny, för att lägga till en ny butik, eller klicka på en redan existerande butik för att redigera. 

När du är i redigerarläget så hittar du, längst ner på sidan, fältet “butik extra uppgifter”. 
Där kan du under plats fältet ändra adress för din butik. Adressen dyker då upp på butikssidan. 

Fältet butik extra uppgifter kommer ifrån tillägget ACF. 

#### Headermeny: 

Headern är indelad i två menyer. Vänster om loggan ligger huvudmeny1 och till höger om loggan ligger huvudmeny2. Du kommer åt dessa genom utseende>menyer i adminläget. 

På små skärmar visas istället menyn, mobilmeny i headern. 

## Version/Uppdateringar
2021-05-12 - version 1.0.0
