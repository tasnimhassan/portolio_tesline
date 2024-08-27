
let sections =document.querySelector('section');
let navlinks =document.querySelector('header nav a');

window.onscroll = () =>{
    sections.forEach(sec  => {
        let top = window.scrollY;
        let offset =sec.offsetTop -100;
        let height =sec.offsetHeight;
        let id =sec.getAttribute('id');

        if (top <= offset && top < offset + height){
            navlinks.forEach(links => {
                links.ClassList.remove('active');
                document.querySelector('header nav a [href*=' +id +']').ClassList.add('active').
            });
        }
    });


    let header =document.query ReadableStreamDefaultController('header');
    header.classList.toggle('sticky',window.scrolly > 100);
}