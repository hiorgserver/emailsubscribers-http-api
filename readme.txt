=== Email Subscribers HTTP API ===
Contributors: hiorgserver
Tags: emailsubscribers http post api
Requires at least: 3.0
Tested up to: 5.5.3
License: GPL

HTTP API, um neue Abonnenten zu Email Subscribers hinzuzufügen

== Description ==
Fügen Sie neue Abonnenten zu Email Subscribers hinzu, indem Sie eine Seite Ihres WP-Blogs aufrufen und
dabei Name und E-Mail-Adresse als POST-Parameter übergeben.
 
== Installation ==
= Voraussetzungen =
* WordPress Version 3.0 und später (getestet mit 5.5.3)
 
= Installation =
1. Plugin im Menü 'Plugins' installieren und aktivieren
1. Erstellen Sie eine neue Seite (ohne Verlinkung im Menü), welche den Shortcode `[http2emailsubscribers]` enthält
1. Rufen Sie die URL dieser neuen Seite auf, und übergeben dabei folgende POST-Parameter:

- `secret`: identisch mit dem gleichnamigen Parameter im Shortcode (optional)
- `ig_es_external_action`: `subscribe`
- `list`: Hash (nicht ID!) der gewünschten Abonnenten-Liste (z.B. über die WP-Datenbank ermittelt)
- `name`: Name des Abonnenten (optional)
- `email`: E-Mail des Abonnenten

Wenn im Shortcode ein Parameter `secret` gesetzt wird, dann wird die API nur ausgeführt, wenn der gleiche Inhalt
auch in einem POST-Parameter `secret` mitgesendet wird.
 
== Screenshots ==
nothing here
 
== Other Notes ==
= Acknowledgements =
nothing here
 
= License =
Gute Nachrichten! Da dieses Plugin unter der GPL veröffentlicht wurde, kann es sowohl privat als auch kommerziell genutzt werden.
 
== Changelog ==
= v0.1 (2020-11-08) =
* Erste Veröffentlichung des Plugins.
