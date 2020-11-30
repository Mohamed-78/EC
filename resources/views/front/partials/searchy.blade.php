 <form action="{{ route('search') }}">
 	<label>
 		<span class="screen-reader-text">Recherche</span>
 		<input type="text" class="search-field" name="q" value="{{ request()->q ?? '' }}" placeholder="Search...">
 	</label>
 	<button type="submit">
 		<i class='bx bx-search-alt'></i>
 	</button>
 </form>