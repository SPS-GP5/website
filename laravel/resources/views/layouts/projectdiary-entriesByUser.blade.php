@foreach($entries as $entry)
<tr>
    <td>{{ $entry->date }}</td>
    <td>{{ $entry->hours }}</td>
    <td>{{ $entry->description }}</td>
</tr>
@endforeach