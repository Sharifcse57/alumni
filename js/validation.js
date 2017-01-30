function validateForm()
{

      var str=document.form1.first_name.value;
      var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";

      for(i=0;i<str.length;i++)
      {
      
      if(valid.indexOf(str.charAt(i))==-1)
      {
      alert("First Name Cannot Contain Numerical Values");
      document.form1.first_name.value="";
      document.form1.first_name.focus();
      return false;
      }}
      
      if(document.form1.first_name.value=="")
      {
      alert("Name Field is Empty");
      return false;
      }

      var str=document.form1.last_name.value;
      var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      //comparing user input with the characters one by one
      for(i=0;i<str.length;i++)
      {
      
      if(valid.indexOf(str.charAt(i))==-1)
      {
      alert("Last Name Cannot Contain Numerical Values");
      document.form1.last_name.value="";
      document.form1.last_name.focus();
      return false;
      }}
      

      if(document.form1.last_name.value=="")
      {
      alert("Name Field is Empty");
      return false;
      }

      }