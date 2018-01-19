/* 
 * Description: Confirmation pop up on form submits
 * Author: David McRae
 * Date: 19-Jan-2018
 */
function show_alert()
{
  if(confirm("Do you really want to carry out this action?"))
    document.forms[0].submit();
  else
    return false;
}


