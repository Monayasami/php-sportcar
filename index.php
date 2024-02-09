<?php

/*, creeremo un modello di automobile, i cui valori cambieranno nel corso dell script PHP.  Creare due classi. La prima conterrà che conterrà i valori iniziali mostrati nella prima riga dello screenshot, la seconda classe dovrà estendere la prima ed essere istanziata in quanto è il modello di automobile. I valori dovranno essere inizializzati tramite gli appositi costruttori delle classi. Nessuna variabile dev'essere inizializzata durante la definizione della classe.  Tutte le proprietà saranno obbligatoriamente di tipo protected o private. Definire ed utilizzare getters e setters per acquisire ed impostare nuovi valori. Implementare una prima volta il getter per mostrare i dati inizializzati (seconda riga). Cambiare la velocità utilizzando il setter corretto, e mostrare la nuova velocità impostata (riga 3). Mostrare un'ultima volta tutti i valori cambiati del modello istanziato.

!!!!Fare attenzione a quando effettuare override di metodi, e anche ad utilizzare le corrette keyword per accedere ai membri della classe figlia o genitore. È possibile implementare altre istanze dopo la prima richiesta nello screenshot.
*/
class AutomobileBase {

    protected $marca;
    protected $modello;
    protected $anno;
  
    public function __construct($marca, $modello, $anno) {
   
    }





















?>