<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a été reçue pour le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property->id]) }}">{{ $property->title }}</a>.

- Prénom : {{ $data['firstname'] }}
- Nom : {{ $data['lastname'] }}
- Email : {{ $data['email'] }}
- Téléphone : {{ $data['phone'] }}

**Message :**<br>
{{ $data['message'] }}

</x-mail::message>
