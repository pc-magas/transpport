

/**
*Peforms a Login Job
*/
var login_user=function()
{
  var values={
              'username':$('#username').val(),
              'password':$('#password').val()
             };
  $.post('./index.php/user/login',values)
  .done(function(data)
  {
    if(data.status.toUpperCase()=='OK')
    {
      document.getElementById('login').style.display='none';
      document.getElementById('imin').style.display='block';
    }
  });
}
