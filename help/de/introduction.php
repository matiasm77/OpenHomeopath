<?php

/**
 * help/de/introduction.php
 *
 * The German indroduction to OpenHomeopath.
 *
 * LICENSE: Permission is granted to copy, distribute and/or modify this document
 * under the terms of the GNU Free Documentation License, Version 1.3
 * or any later version published by the Free Software Foundation;
 * with no Invariant Sections, no Front-Cover Texts, and no Back-Cover Texts.
 * A copy of the license is included in doc/en/fdl_1.3.php.
 *
 * @category  Manual
 * @package   Introduction
 * @author    Henri Schumacher <henri.hulski@gazeta.pl>
 * @copyright 2007-2014 Henri Schumacher
 * @license   http://www.gnu.org/licenses/fdl.html GNU Free Documentation License v1.3
 * @version   1.0
 * @link      http://openhomeo.org/openhomeopath/download/OpenHomeopath_1.0.tar.gz
 */

chdir("../..");
include_once ("include/classes/login/session.php");
$skin = $session->skin;
$head_title = "Einführung :: Hilfe :: OpenHomeopath";
$meta_description = "Handbuch für OpenHomeopath, Einführung";
include("help/layout/$skin/header.php");
?>
<h1>
  Hilfe zu OpenHomeopath
</h1>
<h2>
  Einführung
</h2>
<p>
  <strong>Homöopathie</strong> ist eine Heilmethode, die Anfang des 19. Jhd. von dem Arzt <strong>Dr. Samuel Hahnemann</strong> begründet wurde und auf dem Prinzip <strong><em>"Similia similibus curentur"</em> - Ähnliches heilt Ähnliches</strong> beruht.<br>
  Das bedeutet, das ein kranker Mensch durch das Mittel geheilt wird, welches beim gesunden Menschen <strong>ähnliche Symptome</strong> wie die seinen erzeugt.
</p>
<p>
  Die <strong>Grundlage</strong> für die homöopathische Behandlung wurde geschaffen, indem von damals bis heute Tausende von Mitteln (pflanzlichen, tierischen und mineralischen Ursprungs) <strong>an gesunden Menschen getestet</strong> und mit den dabei auftretenden Symptomen in <strong><em>"Materia Medicas" (Arzneimittellehren)</em></strong> zusammengefasst wurden.<br>
  Um die Wahl des richtigen Mittels (<strong><em>"Similimum"</em></strong>) zu erleichtern, wurden aus den Arzneimittellehren die <strong><em>"Repertorien"</em></strong> extrahiert. Dies sind <strong>Nachschlagewerke</strong>, bei denen die Symptome mit den ihnen zugeordneten Mitteln zu Rubriken zusammengefasst werden und entweder nach dem <strong>Kopf-Fuß-Schema</strong> oder alphabetisch unter verschiedenen Kapiteln und Hauptrubriken eingeordnet sind.<br>
  Den Mitteln werden, je nachdem wie stark das entsprechende Symptom ausgeprägt ist, eine <strong>Wertigkeit</strong> von 1-3, 1-4 oder 1-5 (abhängig vom Repertorium) beigelegt.
</p>
<p>
  Der Homöopath trägt durch eine <strong>ausführliche Befragung</strong> des Patienten (<strong><em>Anamnese</em></strong> - Fallaufnahme) dessen Symptome einschließlich der Modalitäten zu einem <strong>Krankheitsbild</strong> zusammen.<br>
  Auf Grundlage des <strong>Krankheitsbildes</strong> lässt sich durch Repertorisierung die <strong>Wahl des Mittels</strong> auf wenige Mittel einschränken.<br>
  Dabei muss besonderes Augenmerk auf für den Krankheitsverlauf <strong>untypische</strong> und für den Patienten <strong>prägnante</strong> Symptome gelegt werden, die entscheidend für die Wahl des Mittels sein können.<br>
  Der erfahrene Homöopath wird auch solche Mittel ausschließen, die ein breites Symptomspektrum abdecken (z.B. <em>Sulfur</em>), also bei Repertorisierungen oft an oberer Stelle stehen, wenn beim Patienten die entscheidenden Symptome fehlen, die auf das Mittel hinweisen.<br>
  Um aus den repertorisierten Mitteln das richtige auszuwählen sollte man zusätzlich <strong>ausführliche Mittelbescheibungen</strong> zu Rate ziehen und das Mittel wählen, welches <strong>in Konstitution und Symptomen</strong> am ehesten dem Patienten entspricht.
</p>
<p>
  Die Mittel werden in der Regel in <strong>Potenzen</strong> gegeben. Da die Wahl der Potenz aber bei der Wahl des Mittels keine Rolle spielt, will ich das Thema hier aussparen und auf die einschlägige Literatur verweisen.
</p>
<?php
include("help/layout/$skin/footer.php");
?>
