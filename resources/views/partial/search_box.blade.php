<div ng-controller="{{ $angularController }}">

	<angucomplete-alt
		id="{{ $idSearch }}"
          input-name="{{ $idSearch }}"
          initial-value="{{ isset($search) && $search ? $search : '' }}"
          placeholder="{{ trans('globals.search').'...' }}"
          pause="100"
          selected-object="selectedItem"
          match-class="highlight"
          remote-url = "{{ route('products.search') }}?q="
          auto-match="true"
          image-field="image"
          remote-url-data-field="products"
          search-fields="name"
          title-field="name"
          description-field="description"
          text-searching="{{ trans('globals.searching') }}"
          text-no-results="{{ trans('globals.no_results') }}"
          minlength="3"
          input-class="form-control"/>

</div>
