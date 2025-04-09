let slide_Index = 1;
show_Slides(slide_Index);

function plus_Slides(n){
	show_Slides(slide_Index += n);
}


function current_Slides(n){
	show_Slides(slide_Index = n);
}


function show_Slides(n){
	let get_Image_Slides = document.getElementsByClassName("product_image");
	let i;
	
	if(n > get_Image_Slides.length){
		slide_Index = 1;
	}
	
	if(n < 1){
		slide_Index = get_Image_Slides.length;
	}
	
	for(i = 0; i < get_Image_Slides.length; i++){
		get_Image_Slides[i].style.display = "none";
	}

    get_Image_Slides[slide_Index - 1].style.display = "inline-block";    
	
}