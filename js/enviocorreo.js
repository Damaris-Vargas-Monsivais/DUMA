const btn=document.getElementById("button");

document.getElementById("form")
.addEventListener('submit', function(event){
    event.preventDefault();

    btn.value='Sending...';

    const serviceID='default_service';
    const templateID='templete_rjlmnxc';

    emailjs.sendForm(serviceID,templateID,this)
    then(()=>{
        btn.value='Send Email';
        alert('SENT!');
    },(err)=>{
        btn.value='Send Email';
        alert(JSON.stringify(err));
    });
});