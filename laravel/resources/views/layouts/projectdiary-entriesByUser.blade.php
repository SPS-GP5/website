@foreach($entries as $entry)
<tr>
    <td class="text-centered">{{ $entry->date }}</td>
    <td class="text-centered">{{ $entry->hours }}</td>
    <td class="text-left">{{ $entry->description }}</td>
</tr>
@endforeach