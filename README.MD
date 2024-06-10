CONSEGNA
Creare un form PHP che permetta di inviare un lungo paragrafo di testo.
Inviare i dati inseriti ad una seconda pagina PHP che restituirà dei risultati elaborando il testo inviato.

 MILESTONE 0
Assicurarsi che l'ambiente funzioni correttamente.

 MILESTONE 1
Creare le due pagine PHP, prendere il dato da una e stamparlo nell'altra

 MILESTONE 2
Nella seconda pagina stampare invece soltanto un messaggio:
"Il paragrafo inviato è lungo N caratteri"
Dovrete ovviamente inserire la reale lunghezza del testo ricevuto.
 
BONUS
Nel form aggiungete un secondo campo, dove l'utente potrà inserire una parola da censurare in quel paragrafo.
Dalla seconda pagina stamperete:
Il messaggio: "Il paragrafo inviato è lungo N caratteri"
Il paragrafo, dove avrete sostituito le occorrenze della stringa da censurar con tre asterischi (***)
Il messaggio: "Il paragrafo censurato è lungo N caratteri"


 CONSIGLI
E' il primo giorno su PHP, state tranquilli
Iniziate a prendere dimestichezza con la lettura della documentazione ufficiale PHP.
All'inizio aiutatevi anche con W3Schools ma con l'obiettivo di spostarvi sulla documentazione ufficiale.
Sono DUE funzioni quindi LEGGETE la documentazione, non chiedete a chatGPT :occhiolino:
Leggete il live coding, ho aggiunto alcuni commenti
Ho già caricato le slide che completeremo domani, per chi fosse curioso
:radioattività: PROBLEMI COMUNI
XAMPP non si chiude? Stoppate apache, chiudete XAMPP terminando il processo, ed eliminate il file C:\XAMPP\xampp-control.ini. Riavviate tutto :faccia_leggermente_sorridente:
Avete cambiato qualcosa in configurazione ma non notate differenza in browser? Provate da un altro browser oppure svuotate la cache.
VSCode vi chiede cose strane? Ignoratelo!
Buon lavoro a tutti!  
-----------------
esecuzione:
-creazione di due file php(come se fossereo due normali html di base)
-nel primo vado ad inserire il tag form che avrà attributo action con valore il nome del secondo file php e avrà come attributo methods il valore GET
-inserisco il tag input con l'attributo  name(serve poi nel secondo file per andare a richiamare i dati inviati)
-inserisco il tag button con l'attributo type di valore "submit"
-inserisco il tag textarea semrpe col name
- nel secondo file all'inizio (prima anche di !DOCTYPE) apro un tag <?php con dentro :
dichiarazione valore tramite $ e nome valore= $_GET(funzione per andare a richiamare il valore ) [qui dentro inseriamo valore dell'attributo name che vogliamo andare a stampare]

fatte le dichiarazioni andiamo a dichiarare dentro al tag p aprendo un tag <?php ?> nel quale all'interno andiamo ad usare il comando echo per andare a stampare in pagina la variabile che ci serve : in questo caso ho usato strlen per stampare in pagina il numero di caratteri del testo inviato dalla pagina precedente 




