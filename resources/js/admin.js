const confirmDeleteBtn=document.querySelectorAll('.confirmDeleteBtn');
const confirmDelete=document.querySelectorAll('.confirmDelete');
const btn_delete=document.querySelectorAll('.btn_delete');
const btn_cancel=document.querySelectorAll('.btn_cancel');


confirmDeleteBtn.forEach(function(confirmDeleteBtn){
    confirmDeleteBtn.addEventListener('click', (e)=>{

        e.preventDefault();
        if (e.target.classList.contains('confirmDeleteBtn')) {
            alert('Do you want to delete this item?');
           confirmDelete.forEach(function(confirmDelete){
            confirmDelete.style.display='flex';
           });
        }
        btn_delete.forEach(function(btn_delete){
            btn_delete.addEventListener('click',()=>{
                confirmDelete.forEach(function(confirmDelete){
                    confirmDelete.style.display='none';
                })
            })
        })
            btn_cancel.forEach(function(btn_cancel){
                btn_cancel.addEventListener('click', (e)=>{
                    confirmDelete.forEach(function(confirmDelete){
                        confirmDelete.style.display='none';
                       });
                }); 
              
            });
    })
});