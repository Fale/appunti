<?php
require "../class/include.php";

file::head("Filosofia del Linguaggio");

toc::show_toc("Filosofia_del_Linguaggio/appunti.php");
?>

<?php t("2", "29/09/2011"); ?>
<p>Martedì ore 11:00 (prenotazione via email)<br />
www.filosofia.unimi.it/paganini/<br />
Martedì: FdP 211</p>
<p><b>Idografia</b>: 1879 Begriffshrift (scrittura delle idee o notazione concettuale). La logica di Frege è diventata la "Logica classica". Le logiche non classiche sono critiche ad alcune assunzioni di Frege.</p>
<p>Frege era un professore di matematica</p>
<p>Nella prima metà dell'800 (prima che scrivesse il suo manuale):</p>
<ul>
  <li> Geometrie non euclidee
  <ul>
    <li> Dato il quinto assioma. Nell'800 si è tentato di dimostrarlo per assurdo. Si scoprì che non si riusciva a negarlo. Fu così possibile creare più di un sistema alternativo alla geometria euclidea.
    <li> Le geometrie non euclidee si perde l'apporccio grafico.
  </ul>
  <li> Intrduzione dei numeri immaginari
  <li> Teoria dei numeri infiniti
</ul>
<p>L'obbiettivo di Frege:</p>
<ul>
  <li> Lo sviluppo della matematica poggia su basi malferme
  <p>=> Bisogna trovare un fondamento per la matemia, ed esso deve essere la logica
Russell scopre che le assunzioni di Frege hanno un paradosso. Conseguentemente Frege abbandona il progetto</p>
</ul>
<p>Frege:</p>
<ul>
  <li> Sostituire soggetto/predicato con funzione/argomenti
  <li> Una funzione ha una natura insatura (Maria ama)
</ul>
<p>Esempi:</p>
<ul>
  <li> (1) Maria ama Giovanni
  <li> (2) Maria ama Paolo
  <li> (3) Giovanni è amato da Maria
  <li> Maria ama ... = M
  <li> Giovanni = g
  <li> Paolo = p
  <li> (1) Mg
  <li> (2) Mp
  <li> (3) Mg
</ul>
<p>Funzione = costante predicativa = lettera maiuscola<br />
Argomenti = costanti individuali = lettera minuscola<br />
Quando si scrive, le costanti predicative prima delle individuali<br />
Enunciati diversi possono avere diverse strutture logiche, ma un unico enunciato può avere diverse strutture logiche.</p>
<p>Maria ama Giovanni</p>
<ul>
  <li> M(g)
  <li> G(m)
  <li> A(m,g)
</ul>
<p>Argomento valido: la verità della conclusione deriva dalla validità delle premesse.</p>

<?php t("3", "30/09/2011"); ?>
<?php t2("3.1", "Il quantificatore universale"); ?>
<p>Traducono in forma logica le parole: tutte le cose, tutto, qualcosa, tutte le cose meno uno, etc.</p>
<p>I sillogismi funzionano nella logica arisotelica, mentre gli enunciati con due parole di quelle appena elencati non erano analizzabili. La logica Fregiana lo permette usando una forma (x) (Mx).</p>
<p>Esercizi:</p>
<ul>
  <li>"Tutto è materiale" (x) (Mx)
  <li>"Tutto è bello" (x) (Bx)
</ul>
<p>"Qualcosa è animato" = non tutto è non animato</p>

<?php t("4", "04/10/2011"); ?>
<?php t2("4.1", "Il quantificatore universale"); ?>
<p>Il martedì in Mercalli 101.</p>
<ul>
  <li>P = è posseduto da
  <li>m = la materia
  <li>(x) P(m,x)
  <li>(x) P(...,x)
</ul>
<p> Quantificatore universale ed esistenziale</p>
<ul>
  <li>&exist;x &equiv; &not; &forall; &not;x
  <li>&not;&forall;x &not;Mx &equiv; &exist;x Mx
  <li>&not;&forall;x Mx &equiv; &exist;x &not;Mx
  <li>&forall;x &not;Mx &equiv; &not;&exist;x Mx
<p> &forall;x Mx</p>
<ul>
  <li>&forall;x &not;Mx (contraria)
  <li>&not;&forall;x Mx (contradditoria)
<?php file::footer(); ?>