<table class="table" id="cityTable">
    <thead>
        <tr>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script>
$(document).ready(function() {
    $('#cityTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('city.data') }}",
        columns: [
            { data: 'name', name: 'name' },
            { data: 'state', name: 'state' },
            { data: 'country', name: 'country' },
        ]
    });
});
</script>
