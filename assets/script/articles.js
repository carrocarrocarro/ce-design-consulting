const showCategoriesBtn=document.querySelector("#category-btn"),closeCategoriesBtn=document.querySelector(".close-cate");

showCategoriesBtn.addEventListener("click",(()=>{body.classList.add("show-categories"),toggleBodyScroll()})),closeCategoriesBtn.addEventListener("click",(()=>{body.classList.remove("show-categories"),toggleBodyScroll()}));