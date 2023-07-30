var currentFilter = '';

function filter(requestedFilter){
    var models = document.getElementsByClassName("category-model");
    if(currentFilter !== requestedFilter && currentFilter.length === 0){
    for (var i = 0; i < models.length; i++) {
        firstNameChar = models[i].id.charAt(0);
        
        if (firstNameChar !== requestedFilter){
            models[i].classList.add('d-none');
            models[i].classList.remove('d-flex');
        }
        else{
            models[i].classList.add('d-flex');
            models[i].classList.remove('d-none');
        }

        };
        toggleActive(requestedFilter,currentFilter);
        currentFilter = requestedFilter;
      
       
    }
    
  
    else if(currentFilter === requestedFilter && currentFilter.length !== 0){
        for (var i = 0; i < models.length; i++) {
            models[i].classList.remove('d-none');
            models[i].classList.add('d-flex');
            }
        toggleActive(requestedFilter,currentFilter);
        currentFilter = '';
      

    }

    else if(currentFilter !== requestedFilter && currentFilter.length !== 0){
        for (var i = 0; i < models.length; i++) {
            firstNameChar = models[i].id.charAt(0);
            if(firstNameChar === requestedFilter){
                models[i].classList.remove('d-none');
                models[i].classList.add('d-flex');
            }
            else if(firstNameChar === currentFilter || firstNameChar !== requestedFilter){
                models[i].classList.remove('d-flex');
                models[i].classList.add('d-none');
            }
            }
        toggleActive(requestedFilter,currentFilter);
        currentFilter = requestedFilter;
    
    }
}

function toggleActive(requestedFilter,currentFilter){
    var activeFilterElements = document.getElementsByClassName("letter");

    for(var i = 0; i < activeFilterElements.length; i++){
        if((activeFilterElements[i].id === requestedFilter) && (requestedFilter !== currentFilter)){
            activeFilterElements[i].classList.add('active');
        }
        else{
            activeFilterElements[i].classList.remove('active');
        }
    }
}

   

