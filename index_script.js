let slide_Index = 1;
show_Slides(slide_Index);


function plus_Slides(n){
	show_Slides(slide_Index += n);
}


function show_Slides(n){
	let get_Grid_Set = document.getElementsByClassName("grid_set");
	
	let i;
	
	if(n > get_Grid_Set.length){
		slide_Index = 1;
	}
	if(n < 1){
		slide_Index = get_Grid_Set.length;
	}
	
	for(i = 0; i < get_Grid_Set.length; i++){
		get_Grid_Set[i].style.display = "none";
	}
	
	get_Grid_Set[slide_Index - 1].style.display = "inline";
	
}