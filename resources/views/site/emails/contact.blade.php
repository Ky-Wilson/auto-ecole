<h2>Nouveau message de contact</h2>
<p><strong>Nom :</strong> {{ $data['nom'] }}</p>
<p><strong>Email :</strong> {{ $data['email'] ?? 'Non fourni' }}</p>
<p><strong>Téléphone :</strong> {{ $data['telephone'] }}</p>
<p><strong>Commune :</strong> {{ $data['commune'] ?? 'Non précisé' }}</p>
<p><strong>Sujet :</strong> {{ $data['sujet'] }}</p>
<p><strong>Message :</strong><br>{{ $data['message'] }}</p>
