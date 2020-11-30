<form action="{{ route('search') }}">
    <div class="row align-items-center">
        <div class="col-md-4">
            <div class="form-group">
                VOS RECHERCHES ICI 
            </div>
        </div>
        <div class="col-md-8">
            <div class="search-box">
                <input type="text" class="form-control" placeholder="Rechercher un produit..." name="q" value="{{ request()->q ?? '' }}">
                <button type="submit"><i class='bx bx-search'></i></button>
            </div>
        </div>
    </div>
</form>