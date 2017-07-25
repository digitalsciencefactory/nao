
document.getElementById('contact_message').onkeyup= function(e)
{
    var nbr = document.getElementById('contact_charcount');
    if ((this.value.length < 250) || (this.value.length > 2500))
    {
        document.getElementById('contact_charcount').className = "bg-danger";
    }else
    {
        document.getElementById('contact_charcount').className = "bg-success";
    }
    document.getElementById('contact_charcount').innerHTML=this.value.length;
};