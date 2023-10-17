<div>
    <div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="create-report">
            
            <div class="form-group">
                <label for="description">Description du rapport</label>
                <textarea wire:model="corps" class="form-control" id="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Créer le rapport</button>
        </form>
    </div>
</div>
