<form action="{{route('search')}}" method="GET">
   <div class="wrap">
      <div class="search">
         <input type="text" name="query" id="query" class="searchTerm" value="{{request()->input('query')}}"
            placeholder="What are you looking for?">
         <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
         </button>
      </div>
   </div>
</form>