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

<script>
   (function () {
   const searchButton = document.querySelector('.searchButton');
   const searchTerm = document.querySelector('.searchTerm');
   const links =document.querySelectorAll('.top-nav-links li');

   var stopScroll = true;
   searchButton.addEventListener('click', (e) => {
      if (stopScroll) {

       e.preventDefault();
       searchTerm.classList.toggle('open');
       searchButton.classList.toggle('close');
      }
      stopScroll = false;
      //

      //  e.returnValue = true;


      //  links.forEach(link =>{
      //      link.classList.toggle('fade');
      //  });
   });

})();
</script>