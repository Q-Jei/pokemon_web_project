function formSubmit(nom_type)
{
  document.forms[0].nom_type.value = nom_type;
  document.forms[0].submit();
}