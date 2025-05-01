<?php include("includes/header.php"); ?>
<h1>Sicherheitsaspekte & Betrugsprävention</h1>
    <p>Beim Bezahlen im Internet werden persönliche und finanzielle Daten übertragen.
      Ohne ausreichende Sicherheitsmaßnahmen können diese Daten gestohlen oder missbraucht werden.</p>
    <ul>
      <li>Jede:r dritte Deutsche war bereits Opfer eines Betrugs oder Betrugsversuchs bei Onlinezahlungen.</li>
      <li>67 % der Befragten erachten den Einsatz moderner Technologien durch Finanzdienstleister als wichtig.</li>
      <li> 95 % erwarten, dass Finanzdienstleister Betrugsfälle in Echtzeit erkennen und sofort eingreifen.</li>
      <li> 40 % überprüfen nur sehr unregelmäßig ihre Kontoumsätze.</li>
    </ul>
    <p>Online-Shopping und digitales Bezahlen gehören für viele Menschen inzwischen zum Alltag:</p>
    <ul>
      <li> Fast 30 % der Deutschen führen mehrmals pro Woche Onlinezahlungen durch.</li>
      <li>Etwa 70 % kaufen mindestens einmal im Monat online ein.</li>
    </ul>
    <p>Da immer mehr Menschen betroffen sind,
      wird die Sicherheit im digitalen Zahlungsverkehr zunehmend wichtiger.</p>
    <h2>Bekannte Betrugsarten (Umfrageergebnisse)</h2>
    <p>Welche dieser Arten von Betrug bei Zahlungen über das Internet sind Ihnen bekannt?</p>
    <ul class="bar-chart">
        <li><div class="bar" style="width: 75%;">Phishing (75%)</div></li>
        <li><div class="bar" style="width: 74%;">Identitätsdiebstahl (74%)</div></li>
        <li><div class="bar" style="width: 73%;">Kreditkartenbetrug (73%)</div></li>
        <li><div class="bar" style="width: 50%;">Nicht autorisierte Abbuchungen (50%)</div></li>
        <li><div class="bar" style="width: 12%;">Vishing (12%)</div></li>
        <li><div class="bar" style="width: 10%;">Quishing (10%)</div></li>
        <li><div class="bar" style="width: 9%;">Smishing (9%)</div></li>
        <li><div class="bar" style="width: 11%;">Keine der Genannten/Weiß nicht (11%)</div></li>
      </ul>
  </div>

  <!-- Rechte Spalte: Akkordeons -->
  <div class="sidebar">
    <details class="info-box">
      <summary><b>Hauptgefahren im E-Payment</b></summary>
      <div class="section">
        <h2>Phishing</h2>
        <ul>
          <li>Gefälschte E-Mails oder SMS versuchen, Passwörter oder Kartendaten abzugreifen.</li>
          <li class="tip">Erkennungsmerkmale: Rechtschreibfehler, Druck zur schnellen Handlung, verdächtige Links.</li>
        </ul>
        <h2>Skimming</h2>
        <ul>
          <li>Kartendaten werden an manipulierten Geldautomaten oder Tankstellen ausgelesen.</li>
          <li class="tip">Schutz: Kontaktlos bezahlen oder sichere Automaten verwenden.</li>
        </ul>
        <h2>Fake-Shops</h2>
        <ul>
          <li>Unseriöse Shops liefern nicht oder stehlen persönliche Daten.</li>
          <li class="tip">Schutz: Bei bekannten Shops kaufen und auf Prüfsiegel achten.</li>
        </ul>
      </div>
    </details>

    <details class="info-box">
      <summary><b>1.2 Maßnahmen zum Schutz</b></summary>
      <div class="section">
        <h2>Zwei-Faktor-Authentifizierung (2FA)</h2>
        <p><strong>Was ist 2FA?</strong><br>Eine Methode mit zwei Nachweisen, z. B. Passwort + SMS-Code.</p>
        <ul>
          <li>SMS-TAN</li>
          <li>App-Code</li>
          <li>Fingerabdruck</li>
        </ul>
        <p><strong>Warum ist sie effektiv?</strong><br>Auch bei Passwortdiebstahl ist eine Zahlung ohne 2. Faktor nicht möglich.</p>
        <p class="example">Beispiel: PayPal, Apple Pay, PSD2-Vorgaben</p>

        <h2>Verschlüsselung</h2>
        <ul>
          <li>TLS/SSL: Schutz durch „https“</li>
          <li>Ende-zu-Ende: direkt zwischen Gerät und Anbieter</li>
          <li>Tokenisierung: Einmalcodes statt Kartennummern</li>
        </ul>

        <h2>Weitere Maßnahmen</h2>
        <ul>
          <li>Virtuelle Kreditkarten</li>
          <li>Limitierung von Zahlungen</li>
        </ul>
      </div>
    </details>

    <details class="info-box">
      <summary><b>1.4 Tipps für sicheres Bezahlen</b></summary>
      <ul>
        <li>Starke Passwörter & Passwortmanager</li>
        <li>Konto regelmäßig prüfen</li>
        <li>Sichere Apps & VPN verwenden</li>
        <li>Kartendaten nie unverschlüsselt speichern</li>
      </ul>
    </details>
<?php include("includes/footer.php"); ?>