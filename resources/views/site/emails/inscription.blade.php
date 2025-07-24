<h2>Nouvelle demande d’inscription</h2>

<p><strong>Formation :</strong> {{ $donnees['formation'] }}</p>
<p><strong>Nom :</strong> {{ $donnees['nom'] }}</p>
<p><strong>Téléphone :</strong> {{ $donnees['telephone'] }}</p>
<p><strong>Email :</strong> {{ $donnees['email'] ?? 'Non renseigné' }}</p>
<p><strong>Commune :</strong> {{ $donnees['commune'] ?? 'Non renseignée' }}</p>
<p><strong>Date souhaitée :</strong> {{ $donnees['date_debut'] ?? 'Non précisée' }}</p>
