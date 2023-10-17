<div>
    <h2>Liste des rapports</h2>
    
    <ul>
        @foreach ($reports as $report)
            <li>{{ $report['title'] }}</li>
        @endforeach
    </ul>
</div>
